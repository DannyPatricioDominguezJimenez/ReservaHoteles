<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReporteAñosResource\Pages;
use App\Models\Reservas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ReporteAñosResource extends Resource
{
    protected static ?string $model = Reservas::class;
    protected static ?string $navigationLabel = 'Reporte Reservas';
    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationGroup = 'Reportes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombres')->label('Nombres'),
                TextColumn::make('apellidos')->label('Apellidos')->searchable(),
                TextColumn::make('direccion')->label('Dirección'),
                TextColumn::make('telefono')->label('Teléfono'),
                TextColumn::make('ingreso')->label('Fecha de ingreso')->date(),
                TextColumn::make('salida')->label('Fecha de salida')->date(),
                TextColumn::make('tipohabitacion')->label('Tipo de habitación'),
                TextColumn::make('nrohabitaciones')->label('Número de habitaciones'),
                TextColumn::make('tarifa')->label('Tarifa'),
                TextColumn::make('metodopago')->label('Método de pago'),
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
