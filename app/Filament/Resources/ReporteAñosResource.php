<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReporteAñosResource\Pages;
use App\Models\Reservas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ReporteAñosResource extends Resource
{
    protected static ?string $model = Reservas::class;
    protected static ?string $navigationLabel = 'Reportes Anuales';
    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('nombres'),
                Tables\Columns\TextColumn::make('apellidos'),
                Tables\Columns\TextColumn::make('direccion'),
                Tables\Columns\TextColumn::make('telefono'),
                Tables\Columns\TextColumn::make('ingreso'),
                Tables\Columns\TextColumn::make('salida'),
                Tables\Columns\TextColumn::make('tipohabitacion'),
                Tables\Columns\TextColumn::make('nrohabitaciones'),
                Tables\Columns\TextColumn::make('tarifa'),
                Tables\Columns\TextColumn::make('metodopago'),
                Tables\Columns\TextColumn::make('ofertas'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('year')
                    ->label('Año')
                    ->placeholder('Seleccione el año')
                    ->options(
                        Reservas::query()
                            ->selectRaw('YEAR(ingreso) as year')
                            ->distinct()
                            ->orderBy('year', 'desc')
                            ->pluck('year', 'year')
                            ->toArray()
                    )
                    ->query(function ($query, $data) {
                        if ($data) {
                            return $query->whereYear('ingreso', $data);
                        } else {
                            return $query->whereRaw('1 = 0'); // No cargar datos por defecto
                        }
                    })
                    ->default(null),
            ])
            ->defaultSort('ingreso', 'desc') // Opcional, para ordenar por fecha de ingreso
            ->actions([])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReporteAños::route('/'),
            'create' => Pages\CreateReporteAños::route('/create'),
            'edit' => Pages\EditReporteAños::route('/{record}/edit'),
        ];
    }
}
