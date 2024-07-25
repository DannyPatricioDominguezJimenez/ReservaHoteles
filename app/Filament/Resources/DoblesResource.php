<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DoblesResource\Pages;
use App\Filament\Resources\DoblesResource\RelationManagers;
use App\Models\Dobles;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
class DoblesResource extends Resource
{
    protected static ?string $model = Dobles::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $navigationGroup = 'Gestion Habitaciones';
    public static function getNavigationBadge(): ?String
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'count';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('imagen')
                ->image()
                ->directory('habitaciones'),
                TextInput::make('tipohabitacion')->label('Tipo de Habitación')->required(),
                TextInput::make('tarifa')->label('Tarifa')->numeric()->required(),
                Select::make('Estado')->label('Estado')->options([
                    'activo' => 'Activo',
                    'inactivo' => 'Inactivo',
                ])->required(),
                TextInput::make('Descripcion')->label('Descripción')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('imagen'),
                TextColumn::make('tipohabitacion')->label('Tipo de Habitación'),
                TextColumn::make('tarifa')->label('Tarifa')->money('USD'),
                TextColumn::make('Estado')->label('Estado'),
                TextColumn::make('Descripcion')->label('Descripción'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->successNotificationTitle('Habitacion Eliminada'),
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
            'index' => Pages\ListDobles::route('/'),
            'create' => Pages\CreateDobles::route('/create'),
            'edit' => Pages\EditDobles::route('/{record}/edit'),
        ];
    }
}
