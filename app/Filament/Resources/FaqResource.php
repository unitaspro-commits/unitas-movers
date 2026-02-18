<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Models\Faq;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    protected static ?string $navigationGroup = 'Content';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('FAQ Details')->schema([
                Forms\Components\Textarea::make('question')->required()->rows(2)->columnSpanFull(),
                Forms\Components\RichEditor::make('answer')->required()->columnSpanFull(),
                Forms\Components\TextInput::make('category')->default('general')->maxLength(50),
                Forms\Components\TextInput::make('sort_order')->numeric()->default(0),
                Forms\Components\Toggle::make('schema_eligible')->default(true),
                Forms\Components\Toggle::make('is_published')->default(true),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question')->searchable()->limit(60),
                Tables\Columns\TextColumn::make('category')->badge()->sortable(),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
                Tables\Columns\IconColumn::make('schema_eligible')->boolean(),
                Tables\Columns\IconColumn::make('is_published')->boolean(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options(fn () => Faq::distinct()->pluck('category', 'category')->toArray()),
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
            'index' => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit' => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}
