<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroStatisticResource\Pages;
use App\Filament\Resources\HeroStatisticResource\RelationManagers;
use App\Models\HeroStatistic;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Resources\Concerns\Translatable;

class HeroStatisticResource extends Resource
{
    use Translatable;

    protected static ?string $model = HeroStatistic::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Home Page';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label(__('site.Title'))
                            ->required(),
                        Forms\Components\TextInput::make('number')
                            ->label(__('site.Number'))
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label(__('site.Title')),
                Tables\Columns\TextColumn::make('number')->label(__('site.Number')),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListHeroStatistics::route('/'),
            'create' => Pages\CreateHeroStatistic::route('/create'),
            'edit' => Pages\EditHeroStatistic::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }
}
