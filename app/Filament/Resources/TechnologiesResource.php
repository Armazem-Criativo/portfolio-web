<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechnologiesResource\Pages;
use App\Filament\Resources\TechnologiesResource\RelationManagers;
use App\Models\Technologies;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TechnologiesResource extends Resource
{
    protected static ?string $model = Technologies::class;

    protected static ?string $navigationLabel = 'Tecnologias';

    protected static ?string $navigationIcon = 'heroicon-o-command-line';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')->label('Imagem')->image()->disk('public')->directory('storage')->required(),
                TextInput::make('lang')->label('Nome')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Imagem'),
                TextColumn::make('lang')->label('Titulo')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->reorderable('sort');
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
            'index' => Pages\ListTechnologies::route('/'),
            'create' => Pages\CreateTechnologies::route('/create'),
            'edit' => Pages\EditTechnologies::route('/{record}/edit'),
        ];
    }
}
