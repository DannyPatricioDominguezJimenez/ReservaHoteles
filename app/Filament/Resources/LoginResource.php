<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LoginResource\Pages;
use App\Filament\Resources\LoginResource\RelationManagers;
use App\Models\Login;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LoginResource extends Resource
{
    protected static ?string $model = Login::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('usuario')->required()->maxLength(100),
                TextInput::make('contraseña')->required()->maxLength(100)
            ]); 
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('usuario')->searchable(),
                TextColumn::make('contraseña')->searchable()
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
            'index' => Pages\ListLogins::route('/'),
            'create' => Pages\CreateLogin::route('/create'),
            'edit' => Pages\EditLogin::route('/{record}/edit'),
        ];
    }
}
