<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndividualesResource\Pages;
use App\Filament\Resources\IndividualesResource\RelationManagers;
use App\Models\Individuales;
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

class IndividualesResource extends Resource
{
    protected static ?string $model = Individuales::class;

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
                Select::make('estado')->label('Estado')->options([
                    'Disponible' => 'Disponible',
                    'Ocupada' => 'Ocupada',
                ])->required(),
                TextInput::make('descripcion')->label('Descripción')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('imagen'),
                TextColumn::make('tipohabitacion')->label('Tipo de Habitación'),
                TextColumn::make('tarifa')->label('Tarifa')->money('USD'),
                TextColumn::make('estado')->label('Estado'),
                TextColumn::make('descripcion')->label('Descripción'),
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
            'index' => Pages\ListIndividuales::route('/'),
            'create' => Pages\CreateIndividuales::route('/create'),
            'edit' => Pages\EditIndividuales::route('/{record}/edit'),
        ];
    }
}
