<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AreaResource\Pages;
use App\Models\Area;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AreaResource extends Resource
{
    protected static ?string $model = Area::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    protected static ?string $navigationGroup = 'Content';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Area Details')->schema([
                Forms\Components\TextInput::make('name')->required()->maxLength(150),
                Forms\Components\TextInput::make('slug')->required()->maxLength(100)->unique(ignoreRecord: true),
                Forms\Components\Select::make('area_type')
                    ->options([
                        'quadrant' => 'Quadrant',
                        'neighborhood' => 'Neighborhood',
                        'town' => 'Town',
                        'corridor' => 'Corridor',
                    ])->required(),
                Forms\Components\Select::make('parent_id')
                    ->relationship('parent', 'name')
                    ->searchable()
                    ->preload(),
                Forms\Components\TextInput::make('h1')->required()->maxLength(150),
                Forms\Components\RichEditor::make('body')->columnSpanFull(),
            ])->columns(2),

            Forms\Components\Section::make('Location')->schema([
                Forms\Components\TextInput::make('latitude')->numeric(),
                Forms\Components\TextInput::make('longitude')->numeric(),
                Forms\Components\TextInput::make('population')->numeric(),
            ])->columns(3),

            Forms\Components\Section::make('Area-Specific Data')->schema([
                Forms\Components\TextInput::make('avg_home_price')->numeric()->prefix('$')->label('Avg Home Price'),
                Forms\Components\TextInput::make('dominant_housing_type')->maxLength(100)->label('Dominant Housing Type')
                    ->placeholder('e.g. Single-family detached, Condos & townhouses'),
                Forms\Components\Select::make('move_complexity')
                    ->options([
                        'easy' => 'Easy',
                        'medium' => 'Medium',
                        'hard' => 'Hard',
                    ])->label('Move Complexity'),
                Forms\Components\TextInput::make('avg_move_cost_2bed')->numeric()->prefix('$')->label('Avg Move Cost (2-bed)'),
                Forms\Components\Toggle::make('elevator_booking_required')->label('Elevator Booking Required'),
            ])->columns(2)->collapsible(),

            Forms\Components\Section::make('Area-Specific Content')->schema([
                Forms\Components\Textarea::make('parking_restrictions')->label('Parking Restrictions')->rows(3),
                Forms\Components\Textarea::make('access_notes')->label('Access Notes')->rows(3),
                Forms\Components\Textarea::make('nearby_landmarks')->label('Nearby Landmarks')->rows(3),
                Forms\Components\Textarea::make('walkability_notes')->label('Walkability / Getting Around')->rows(3),
            ])->collapsible(),

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
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('area_type')->badge()->sortable(),
                Tables\Columns\TextColumn::make('move_complexity')->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'easy' => 'success',
                        'medium' => 'warning',
                        'hard' => 'danger',
                        default => 'gray',
                    })->label('Complexity'),
                Tables\Columns\TextColumn::make('parent.name')->label('Parent'),
                Tables\Columns\IconColumn::make('is_published')->boolean(),
                Tables\Columns\TextColumn::make('sort_order')->sortable(),
            ])
            ->defaultSort('sort_order')
            ->filters([
                Tables\Filters\SelectFilter::make('area_type')
                    ->options([
                        'quadrant' => 'Quadrant',
                        'neighborhood' => 'Neighborhood',
                        'town' => 'Town',
                        'corridor' => 'Corridor',
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
            'index' => Pages\ListAreas::route('/'),
            'create' => Pages\CreateArea::route('/create'),
            'edit' => Pages\EditArea::route('/{record}/edit'),
        ];
    }
}
