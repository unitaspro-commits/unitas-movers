<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?string $navigationGroup = 'Content';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Page Details')->schema([
                Forms\Components\TextInput::make('name')->required()->maxLength(150),
                Forms\Components\TextInput::make('slug')->required()->maxLength(100)->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('h1')->required()->maxLength(150),
                Forms\Components\Textarea::make('hero_text')->rows(2),
                Forms\Components\RichEditor::make('body')->columnSpanFull(),
            ])->columns(2),

            Forms\Components\Section::make('SEO')->schema([
                Forms\Components\TextInput::make('meta_title')->required()->maxLength(70)
                    ->helperText(fn (?string $state) => strlen($state ?? '') . '/70 characters'),
                Forms\Components\TextInput::make('meta_description')->required()->maxLength(170)
                    ->helperText(fn (?string $state) => strlen($state ?? '') . '/170 characters'),
                Forms\Components\TextInput::make('canonical_url')->maxLength(255),
                Forms\Components\TextInput::make('og_image')->maxLength(255),
            ])->columns(2),

            Forms\Components\Section::make('FAQ')->schema([
                Forms\Components\Repeater::make('faq_json')
                    ->schema([
                        Forms\Components\TextInput::make('question')->required(),
                        Forms\Components\Textarea::make('answer')->required()->rows(2),
                    ])
                    ->columns(1)
                    ->collapsible()
                    ->defaultItems(0),
            ]),

            Forms\Components\Section::make('Settings')->schema([
                Forms\Components\Toggle::make('is_published')->default(false),
                Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sort_order')->sortable()->label('#'),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('slug')->searchable(),
                Tables\Columns\IconColumn::make('is_published')->boolean(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
