<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RouteResource\Pages;
use App\Models\Route;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RouteResource extends Resource
{
    protected static ?string $model = Route::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-long-right';

    protected static ?string $navigationGroup = 'Content';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Route Details')->schema([
                Forms\Components\TextInput::make('origin_city')->required()->maxLength(100),
                Forms\Components\TextInput::make('dest_city')->required()->maxLength(100)->label('Destination City'),
                Forms\Components\TextInput::make('slug')->required()->maxLength(100)->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('h1')->required()->maxLength(150),
                Forms\Components\TextInput::make('distance_km')->numeric()->required()->suffix('km'),
                Forms\Components\TextInput::make('drive_time_hours')->numeric()->required()->suffix('hours'),
                Forms\Components\TextInput::make('price_range_min')->numeric()->prefix('$'),
                Forms\Components\TextInput::make('price_range_max')->numeric()->prefix('$'),
                Forms\Components\Toggle::make('is_bidirectional'),
            ])->columns(2),

            Forms\Components\Section::make('Route Data')->schema([
                Forms\Components\TextInput::make('highway_name')->maxLength(150)->label('Highway Name')
                    ->placeholder('e.g. Queen Elizabeth II Highway (Highway 2)'),
                Forms\Components\TextInput::make('highway_number')->maxLength(20)->label('Highway #'),
                Forms\Components\TextInput::make('fuel_cost_estimate')->numeric()->prefix('$')->label('Est. Fuel Cost'),
                Forms\Components\TextInput::make('elevation_change')->maxLength(100)->label('Elevation Change')
                    ->placeholder('e.g. 1,045m → 668m'),
                Forms\Components\TextInput::make('popular_move_months')->maxLength(100)->label('Popular Move Months')
                    ->placeholder('e.g. Peak: Jun-Aug, Value: Oct-Feb'),
                Forms\Components\Toggle::make('backhaul_discount')->label('Backhaul Discount Available'),
            ])->columns(2)->collapsible(),

            Forms\Components\Section::make('Housing Comparison Data')->schema([
                Forms\Components\KeyValue::make('origin_housing_data')
                    ->label('Origin City Housing Data')
                    ->keyLabel('Field')
                    ->valueLabel('Value')
                    ->addActionLabel('Add field')
                    ->helperText('Keys: avg_price, dominant_type, avg_sqft'),
                Forms\Components\KeyValue::make('dest_housing_data')
                    ->label('Destination City Housing Data')
                    ->keyLabel('Field')
                    ->valueLabel('Value')
                    ->addActionLabel('Add field')
                    ->helperText('Keys: avg_price, dominant_type, avg_sqft'),
            ])->columns(2)->collapsible()->collapsed(),

            Forms\Components\Section::make('Route-Specific Content')->schema([
                Forms\Components\Textarea::make('seasonal_tips')->label('Seasonal Moving Tips')->rows(3),
                Forms\Components\Textarea::make('road_conditions_note')->label('Road Conditions Note')->rows(3),
                Forms\Components\Textarea::make('notable_stops')->label('Notable Stops / Communities Along the Way')->rows(3),
            ])->collapsible(),

            Forms\Components\Section::make('Content')->schema([
                Forms\Components\RichEditor::make('route_overview')->label('Route Overview'),
                Forms\Components\RichEditor::make('cost_breakdown')->label('Cost Breakdown'),
                Forms\Components\RichEditor::make('destination_guide')->label('Destination Guide'),
            ]),

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
                Tables\Columns\TextColumn::make('origin_city')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('dest_city')->searchable()->sortable()->label('Destination'),
                Tables\Columns\TextColumn::make('distance_km')->suffix(' km')->sortable(),
                Tables\Columns\TextColumn::make('price_range_min')->money('CAD')->label('Min Price'),
                Tables\Columns\TextColumn::make('price_range_max')->money('CAD')->label('Max Price'),
                Tables\Columns\IconColumn::make('is_published')->boolean(),
            ])
            ->defaultSort('sort_order')
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
            'index' => Pages\ListRoutes::route('/'),
            'create' => Pages\CreateRoute::route('/create'),
            'edit' => Pages\EditRoute::route('/{record}/edit'),
        ];
    }
}
