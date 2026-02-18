<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaResource\Pages;
use App\Models\Media;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MediaResource extends Resource
{
    protected static ?string $model = Media::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'SEO';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Media Details')->schema([
                Forms\Components\FileUpload::make('path')
                    ->image()
                    ->directory('media')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('alt_text')->required()->maxLength(255),
                Forms\Components\TextInput::make('title')->maxLength(255),
                Forms\Components\TextInput::make('format')
                    ->disabled()
                    ->dehydrated()
                    ->helperText('Auto-detected from upload'),
                Forms\Components\TextInput::make('width')
                    ->numeric()
                    ->suffix('px')
                    ->disabled()
                    ->dehydrated(),
                Forms\Components\TextInput::make('height')
                    ->numeric()
                    ->suffix('px')
                    ->disabled()
                    ->dehydrated(),
                Forms\Components\TextInput::make('size_bytes')
                    ->numeric()
                    ->suffix('bytes')
                    ->disabled()
                    ->dehydrated()
                    ->formatStateUsing(fn (?int $state) => $state ? number_format($state) : null),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('path'),
                Tables\Columns\TextColumn::make('alt_text')->searchable()->limit(40),
                Tables\Columns\TextColumn::make('format')->badge(),
                Tables\Columns\TextColumn::make('width')->suffix('px'),
                Tables\Columns\TextColumn::make('height')->suffix('px'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMedia::route('/'),
            'create' => Pages\CreateMedia::route('/create'),
            'edit' => Pages\EditMedia::route('/{record}/edit'),
        ];
    }
}
