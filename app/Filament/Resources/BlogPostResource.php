<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Models\BlogPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Content';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Post Details')->schema([
                Forms\Components\TextInput::make('title')->required()->maxLength(200),
                Forms\Components\TextInput::make('slug')->required()->maxLength(150)->unique(ignoreRecord: true),
                Forms\Components\Select::make('category')
                    ->options([
                        'guides' => 'Guides',
                        'tips' => 'Tips',
                        'seasonal' => 'Seasonal',
                        'local' => 'Local',
                        'pillar' => 'Pillar',
                    ])->required(),
                Forms\Components\TextInput::make('target_keyword')->required()->maxLength(100),
                Forms\Components\Textarea::make('excerpt')->rows(2),
                Forms\Components\RichEditor::make('body')->columnSpanFull(),
            ])->columns(2),

            Forms\Components\Section::make('Relationships')->schema([
                Forms\Components\Select::make('related_service_id')
                    ->relationship('relatedService', 'name')
                    ->searchable()
                    ->preload(),
                Forms\Components\Select::make('related_area_id')
                    ->relationship('relatedArea', 'name')
                    ->searchable()
                    ->preload(),
                Forms\Components\Toggle::make('is_pillar'),
            ])->columns(2),

            Forms\Components\Section::make('SEO')->schema([
                Forms\Components\TextInput::make('meta_title')->required()->maxLength(70)
                    ->helperText(fn (?string $state) => strlen($state ?? '') . '/70 characters'),
                Forms\Components\TextInput::make('meta_description')->required()->maxLength(170)
                    ->helperText(fn (?string $state) => strlen($state ?? '') . '/170 characters'),
                Forms\Components\TextInput::make('featured_image')->maxLength(255),
                Forms\Components\TextInput::make('canonical_url')->maxLength(255),
                Forms\Components\TextInput::make('og_image')->maxLength(255),
            ])->columns(2),

            Forms\Components\Section::make('Publishing')->schema([
                Forms\Components\DateTimePicker::make('published_at'),
            ]),

            Forms\Components\Section::make('FAQ')->schema([
                Forms\Components\Repeater::make('faq_json')
                    ->schema([
                        Forms\Components\TextInput::make('question')->required(),
                        Forms\Components\Textarea::make('answer')->required()->rows(2),
                    ])
                    ->collapsible()
                    ->defaultItems(0),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable()->limit(50),
                Tables\Columns\TextColumn::make('category')->badge()->sortable(),
                Tables\Columns\TextColumn::make('target_keyword')->searchable(),
                Tables\Columns\IconColumn::make('is_pillar')->boolean(),
                Tables\Columns\TextColumn::make('published_at')->dateTime()->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'guides' => 'Guides',
                        'tips' => 'Tips',
                        'seasonal' => 'Seasonal',
                        'local' => 'Local',
                        'pillar' => 'Pillar',
                    ]),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
