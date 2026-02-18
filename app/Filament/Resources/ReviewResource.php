<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Models\Review;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static ?string $navigationGroup = 'Content';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Review Details')->schema([
                Forms\Components\TextInput::make('customer_name')->required()->maxLength(150),
                Forms\Components\Select::make('rating')
                    ->options([1 => '1 Star', 2 => '2 Stars', 3 => '3 Stars', 4 => '4 Stars', 5 => '5 Stars'])
                    ->required(),
                Forms\Components\Textarea::make('body')->required()->rows(4)->columnSpanFull(),
                Forms\Components\Select::make('source')
                    ->options([
                        'google' => 'Google',
                        'homestars' => 'HomeStars',
                        'yelp' => 'Yelp',
                        'bbb' => 'BBB',
                        'direct' => 'Direct',
                        'other' => 'Other',
                    ])->default('direct'),
                Forms\Components\Select::make('service_id')
                    ->relationship('service', 'name')
                    ->searchable()
                    ->preload(),
                Forms\Components\Select::make('area_id')
                    ->relationship('area', 'name')
                    ->searchable()
                    ->preload(),
                Forms\Components\Toggle::make('is_featured')->default(false),
                Forms\Components\Toggle::make('is_published')->default(true),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer_name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('rating')->sortable(),
                Tables\Columns\TextColumn::make('body')->limit(60),
                Tables\Columns\TextColumn::make('source')->badge(),
                Tables\Columns\IconColumn::make('is_featured')->boolean(),
                Tables\Columns\IconColumn::make('is_published')->boolean(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('source')
                    ->options([
                        'google' => 'Google',
                        'homestars' => 'HomeStars',
                        'yelp' => 'Yelp',
                        'bbb' => 'BBB',
                        'direct' => 'Direct',
                        'other' => 'Other',
                    ]),
                Tables\Filters\TernaryFilter::make('is_featured'),
                Tables\Filters\TernaryFilter::make('is_published'),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
