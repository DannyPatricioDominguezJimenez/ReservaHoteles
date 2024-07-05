<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingsResource\Pages;
use App\Filament\Resources\BookingsResource\RelationManagers;
use App\Models\Bookings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Date;
use Illuminate\Support\Number;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Checkbox;

class BookingsResource extends Resource
{
    protected static ?string $model = Bookings::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombres')->label('Nombres')->required(),
            TextInput::make('apellidos')->label('Apellidos')->required(),
            TextInput::make('direccion')->label('Dirección'),
            TextInput::make('telefono')->label('Teléfono'),
            DatePicker::make('ingreso')->label('Fecha de ingreso')->format('Y-m-d')->required(),
            DatePicker::make('salida')->label('Fecha de salida')->format('Y-m-d')->required(),
            Select::make('tipohabitacion')
                ->label('Tipo de habitación')
                ->options([
                    'individual' => 'Individual',
                    'doble' => 'Doble',
                    'suite' => 'Suite'
                ])
                ->required(),
            Select::make('nrohabitaciones')
                ->label('Número de habitaciones')
                ->options([
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                ])
                ->required(),
            TextInput::make('tarifa')->label('Tarifa')->numeric()->step(0.01),
            Select::make('metodopago')
                ->label('Método de pago')
                ->options([
                    'Efectivo' => 'Efectivo',
                    'Transferencia' => 'Transferencia',
                    'Tarjetas de débito y crédito' => 'Tarjetas de débito y crédito'
                ])
                ->required(),
            Select::make('ofertas')
                ->label('Ofertas')
                ->options([
                    '10% en 10 noches' => '10% en 10 noches',
                    '20% en más de 10 noches' => '20% en más de 10 noches',
                    '2x1 Solo Alojamiento' => '2x1 Solo Alojamiento'
                ])
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('nombres')->label('Nombres'),
                TextColumn::make('apellidos')->label('Apellidos'),
                TextColumn::make('direccion')->label('Dirección'),
                TextColumn::make('telefono')->label('Teléfono'),
                TextColumn::make('ingreso')->label('Fecha de ingreso')->date(),
                TextColumn::make('salida')->label('Fecha de salida')->date(),
                TextColumn::make('tipohabitacion')->label('Tipo de habitación'),
                TextColumn::make('nrohabitaciones')->label('Número de habitaciones'),
                TextColumn::make('tarifa')->label('Tarifa'),
                TextColumn::make('metodopago')->label('Método de pago'),
                TextColumn::make('ofertas')->label('Ofertas')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBookings::route('/create'),
            'edit' => Pages\EditBookings::route('/{record}/edit'),
        ];
    }
}
