<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReporteMesesResource\Pages;
use App\Filament\Resources\ReporteMesesResource\RelationManagers;
use App\Models\ReporteMeses;
use App\Models\reservas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReporteMesesResource extends Resource
{
    protected static ?string $model = Reservas::class;
    protected static ?string $navigationLabel = 'Reporte Reservas Mensual';
    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationGroup = 'Reportes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
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
                Tables\Filters\SelectFilter::make('month')
                ->label('Mes')
                ->placeholder('Seleccione el mes')
                ->options([
                    '01' => 'Enero',
                    '02' => 'Febrero',
                    '03' => 'Marzo',
                    '04' => 'Abril',
                    '05' => 'Mayo',
                    '06' => 'Junio',
                    '07' => 'Julio',
                    '08' => 'Agosto',
                    '09' => 'Septiembre',
                    '10' => 'Octubre',
                    '11' => 'Noviembre',
                    '12' => 'Diciembre',
                ])
                ->query(function ($query, $data) {
                    if ($data) {
                        // Eliminar registros existentes en reportereservas
                        \DB::table('reporte_meses')->truncate();
            
                        // Obtener los registros filtrados de reservas por mes
                        $reservas = $query->whereMonth('ingreso', $data)->get();
            
                        // Insertar los registros en reportereservas
                        foreach ($reservas as $reserva) {
                            \DB::table('reporte_meses')->insert([
                                'nombres' => $reserva->nombres,
                                'apellidos' => $reserva->apellidos,
                                'direccion' => $reserva->direccion,
                                'telefono' => $reserva->telefono,
                                'ingreso' => $reserva->ingreso,
                                'salida' => $reserva->salida,
                                'tipohabitacion' => $reserva->tipohabitacion,
                                'nrohabitaciones' => $reserva->nrohabitaciones,
                                'tarifa' => $reserva->tarifa,
                                'metodopago' => $reserva->metodopago,
                                'ofertas' => $reserva->ofertas,
                                'created_at' => now(),
                                'updated_at' => now(),
                            ]);
                        }
                        return $query;
                    } else {
                        return $query->whereRaw('1 = 0'); // No cargar datos por defecto
                    }
                })
                ->default(null),
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
            'index' => Pages\ListReporteMeses::route('/'),
            'create' => Pages\CreateReporteMeses::route('/create'),
            'edit' => Pages\EditReporteMeses::route('/{record}/edit'),
        ];
    }
}
