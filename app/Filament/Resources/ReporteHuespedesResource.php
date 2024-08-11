<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReporteHuespedesResource\Pages;
use App\Filament\Resources\ReporteHuespedesResource\RelationManagers;
use App\Models\Huespedes;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReporteHuespedesResource extends Resource
{
    protected static ?string $model = Huespedes::class;

    protected static ?string $navigationLabel = 'Reporte Huespedes Mensual';
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
                TextColumn::make('nombre'),
                TextColumn::make('apellido'),
                TextColumn::make('cedula'),
                TextColumn::make('fechanacimiento')
                    ->date(),
                TextColumn::make('email'),
                TextColumn::make('password'),
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
                // Eliminar registros existentes en reportehuespedes
                \DB::table('reporte_huespedes')->truncate();

                // Obtener los registros filtrados de huespedes
                $huespedes = $query->whereMonth('fechanacimiento', $data)->get();

                // Insertar los registros en reportehuespedes
                foreach ($huespedes as $huesped) {
                    \DB::table('reporte_huespedes')->insert([
                        'nombre' => $huesped->nombre,
                        'apellido' => $huesped->apellido,
                        'cedula' => $huesped->cedula,
                        'fechanacimiento' => $huesped->fechanacimiento,
                        'email' => $huesped->email,
                        'password' => $huesped->password,
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
            'index' => Pages\ListReporteHuespedes::route('/'),
            'create' => Pages\CreateReporteHuespedes::route('/create'),
            'edit' => Pages\EditReporteHuespedes::route('/{record}/edit'),
        ];
    }
}
