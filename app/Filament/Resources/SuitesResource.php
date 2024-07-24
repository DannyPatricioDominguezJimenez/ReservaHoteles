<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuitesResource\Pages;
use App\Filament\Resources\SuitesResource\RelationManagers;
use App\Models\Suites;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class SuitesResource extends Resource
{
    protected static ?string $model = Suites::class;

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
                ->disk('public')
                ->directory('habitaciones')
                -> required(),
                TextInput::make('tipohabitacion')->label('Tipo de Habitación')->required(),
                TextInput::make('tarifa')->label('Tarifa')->numeric()->required(),
                Select::make('Estado')->label('Estado')->options([
                    'Disponible' => 'Disponible',
                    'Ocupada' => 'Ocupada',
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
            'index' => Pages\ListSuites::route('/'),
            'create' => Pages\CreateSuites::route('/create'),
            'edit' => Pages\EditSuites::route('/{record}/edit'),
        ];
    }
}
