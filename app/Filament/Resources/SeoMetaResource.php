<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeoMetaResource\Pages;
use App\Models\SeoMeta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SeoMetaResource extends Resource
{
    protected static ?string $model = SeoMeta::class;

    protected static ?string $navigationIcon = 'heroicon-o-magnifying-glass';

    protected static ?string $navigationGroup = 'SEO';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationLabel = 'SEO Meta';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Page Identification')->schema([
                Forms\Components\TextInput::make('page_key')->required()->maxLength(50)
                    ->unique(ignoreRecord: true)
                    ->placeholder('homepage, pricing, faq, about...'),
            ]),

            Forms\Components\Section::make('SEO Fields')->schema([
                Forms\Components\TextInput::make('meta_title')->required()->maxLength(70)
                    ->helperText(fn (?string $state) => strlen($state ?? '') . '/70 characters'),
                Forms\Components\TextInput::make('meta_description')->required()->maxLength(170)
                    ->helperText(fn (?string $state) => strlen($state ?? '') . '/170 characters'),
                Forms\Components\TextInput::make('h1')->maxLength(150),
                Forms\Components\TextInput::make('canonical_url')->maxLength(255),
                Forms\Components\TextInput::make('og_image')->maxLength(255),
            ])->columns(2),

            Forms\Components\Section::make('Schema JSON')->schema([
                Forms\Components\Textarea::make('schema_json')
                    ->rows(10)
                    ->columnSpanFull()
                    ->helperText('Enter valid JSON-LD schema markup'),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_key')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('meta_title')->limit(40),
                Tables\Columns\TextColumn::make('meta_description')->limit(50),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->defaultSort('page_key')
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
            'index' => Pages\ListSeoMetas::route('/'),
            'create' => Pages\CreateSeoMeta::route('/create'),
            'edit' => Pages\EditSeoMeta::route('/{record}/edit'),
        ];
    }
}
