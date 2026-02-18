<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RedirectResource\Pages;
use App\Models\Redirect;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RedirectResource extends Resource
{
    protected static ?string $model = Redirect::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-uturn-right';

    protected static ?string $navigationGroup = 'SEO';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Redirect Details')->schema([
                Forms\Components\TextInput::make('from_path')->required()->maxLength(500)
                    ->prefix('/')->placeholder('old-page-url'),
                Forms\Components\TextInput::make('to_path')->required()->maxLength(500)
                    ->prefix('/')->placeholder('new-page-url'),
                Forms\Components\Select::make('status_code')
                    ->options([301 => '301 Permanent', 302 => '302 Temporary'])
                    ->default(301)
                    ->required(),
                Forms\Components\Placeholder::make('hit_count')
                    ->content(fn (?Redirect $record) => $record ? number_format($record->hit_count) . ' hits' : '0 hits'),
                Forms\Components\Placeholder::make('last_hit_at')
                    ->content(fn (?Redirect $record) => $record?->last_hit_at?->diffForHumans() ?? 'Never'),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('from_path')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('to_path')->searchable(),
                Tables\Columns\TextColumn::make('status_code')->badge()
                    ->color(fn (int $state) => $state === 301 ? 'success' : 'warning'),
                Tables\Columns\TextColumn::make('hit_count')->sortable(),
                Tables\Columns\TextColumn::make('last_hit_at')->dateTime()->sortable(),
            ])
            ->defaultSort('hit_count', 'desc')
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
            'index' => Pages\ListRedirects::route('/'),
            'create' => Pages\CreateRedirect::route('/create'),
            'edit' => Pages\EditRedirect::route('/{record}/edit'),
        ];
    }
}
