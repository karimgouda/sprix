<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Build;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\BuildResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BuildResource\RelationManagers;
use Filament\Forms\Components\Section;

class BuildResource extends Resource
{
    use Translatable;

    protected static ?string $model = Build::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationGroup = 'Home Page';

    protected static ?int $navigationSort = 11;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description'),
                    FileUpload::make('image')
                        ->label('Background Image')
                        ->image(),
                    Section::make('First Icon')
                        ->schema([
                            TextInput::make('icon_1')
                                ->label('First Icon')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('number_1')
                                ->label('First Number')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('description_1')
                                ->label('First Description')
                                ->required()
                                ->maxLength(255),
                        ]),
                    Section::make('Second Icon')
                        ->schema([
                            TextInput::make('icon_2')
                                ->label('Second Icon')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('number_2')
                                ->label('Second Number')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('description_2')
                                ->label('Second Description')
                                ->required()
                                ->maxLength(255),
                        ]),
                    TextInput::make('button_icon')
                        ->label('Button Icon')
                        ->required()
                        ->maxLength(255),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('title')->limit(50)->searchable(),
                TextColumn::make('description')->limit(50)->searchable(),
                ImageColumn::make('image'),
                TextColumn::make('icon_1')->limit(50)->searchable(),
                TextColumn::make('number_1')->limit(50)->searchable(),
                TextColumn::make('description_1')->limit(50)->searchable(),
                TextColumn::make('icon_2')->limit(50)->searchable(),
                TextColumn::make('number_2')->limit(50)->searchable(),
                TextColumn::make('description_2')->limit(50)->searchable(),
                TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBuilds::route('/'),
            'create' => Pages\CreateBuild::route('/create'),
            'edit' => Pages\EditBuild::route('/{record}/edit'),
        ];
    }
}
