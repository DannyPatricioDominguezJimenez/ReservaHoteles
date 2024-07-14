<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuestsResource\Pages;
use App\Filament\Resources\GuestsResource\RelationManagers;
use App\Models\Guest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GuestsResource extends Resource
{
    protected static ?string $model = Guest::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationGroup = 'Cruds';
    protected static ?string $recordTitleAttribute = 'apellido';
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
                TextInput::make('nombre')->label('Nombre')->required(),
                TextInput::make('apellido')->label('Apellido')->required(),
                TextInput::make('cedula')->label('Cedula')->required(),
                DatePicker::make('fechanacimiento')->label('Fecha de Nacimiento')->format('Y-m-d')->required(),
                TextInput::make('email')->label('Email')->required(),
                TextInput::make('password')->label('Password')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('nombre')->label('Nombre'),
                TextColumn::make('apellido')->label('Apellido')->searchable(),
                TextColumn::make('cedula')->label('Cedula'),
                TextColumn::make('fechanacimiento')->label('Fecha de Nacimiento')->date(),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('password')->label('Password'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->successNotificationTitle('Huesped Eliminado'),
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
            'index' => Pages\ListGuests::route('/'),
            'create' => Pages\CreateGuests::route('/create'),
            'edit' => Pages\EditGuests::route('/{record}/edit'),
        ];
    }
}
