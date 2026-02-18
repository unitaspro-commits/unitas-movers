<?php

namespace App\Filament\Resources;

use App\Enums\MoveSize;
use App\Enums\QuoteStatus;
use App\Enums\ReferralSource;
use App\Filament\Resources\QuoteResource\Pages;
use App\Models\Quote;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class QuoteResource extends Resource
{
    protected static ?string $model = Quote::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Lead Management';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Customer Information')->schema([
                Forms\Components\TextInput::make('full_name')->required()->maxLength(150),
                Forms\Components\TextInput::make('phone')->tel()->required()->maxLength(20),
                Forms\Components\TextInput::make('email')->email()->required()->maxLength(255),
                Forms\Components\Select::make('preferred_language')
                    ->options(['en' => 'English', 'fr' => 'French'])
                    ->default('en'),
            ])->columns(2),

            Forms\Components\Section::make('Move Details')->schema([
                Forms\Components\TextInput::make('moving_from')->required()->maxLength(500),
                Forms\Components\TextInput::make('moving_to')->required()->maxLength(500),
                Forms\Components\DatePicker::make('move_date')->required(),
                Forms\Components\Select::make('move_size')
                    ->options(collect(MoveSize::cases())->mapWithKeys(fn ($s) => [$s->value => $s->label()]))
                    ->required(),
                Forms\Components\TagsInput::make('services_needed')->placeholder('Add service'),
                Forms\Components\Textarea::make('additional_notes')->rows(3)->columnSpanFull(),
            ])->columns(2),

            Forms\Components\Section::make('Lead Management')->schema([
                Forms\Components\Select::make('status')
                    ->options(collect(QuoteStatus::cases())->mapWithKeys(fn ($s) => [$s->value => $s->label()]))
                    ->default('new')
                    ->required(),
                Forms\Components\Select::make('referral_source')
                    ->options(collect(ReferralSource::cases())->mapWithKeys(fn ($s) => [$s->value => $s->label()])),
                Forms\Components\TextInput::make('quoted_amount')->numeric()->prefix('$'),
                Forms\Components\TextInput::make('final_amount')->numeric()->prefix('$'),
                Forms\Components\Select::make('assigned_to')
                    ->relationship('assignedUser', 'name'),
                Forms\Components\Textarea::make('internal_notes')->rows(3)->columnSpanFull(),
            ])->columns(2),

            Forms\Components\Section::make('Attribution')->schema([
                Forms\Components\TextInput::make('source_page')->maxLength(255),
                Forms\Components\TextInput::make('utm_source')->maxLength(100),
                Forms\Components\TextInput::make('utm_medium')->maxLength(100),
                Forms\Components\TextInput::make('utm_campaign')->maxLength(100),
            ])->columns(2)->collapsed(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('full_name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('phone')->searchable(),
                Tables\Columns\TextColumn::make('move_date')->date()->sortable(),
                Tables\Columns\TextColumn::make('move_size')
                    ->formatStateUsing(fn (MoveSize $state) => $state->label()),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (QuoteStatus $state) => $state->color()),
                Tables\Columns\TextColumn::make('quoted_amount')->money('CAD')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options(collect(QuoteStatus::cases())->mapWithKeys(fn ($s) => [$s->value => $s->label()])),
                Tables\Filters\SelectFilter::make('move_size')
                    ->options(collect(MoveSize::cases())->mapWithKeys(fn ($s) => [$s->value => $s->label()])),
                Tables\Filters\SelectFilter::make('referral_source')
                    ->options(collect(ReferralSource::cases())->mapWithKeys(fn ($s) => [$s->value => $s->label()])),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuotes::route('/'),
            'create' => Pages\CreateQuote::route('/create'),
            'edit' => Pages\EditQuote::route('/{record}/edit'),
        ];
    }
}
