<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TankParameterResource\Pages;
use App\Filament\Resources\TankParameterResource\RelationManagers;
use App\Filament\Resources\TankParameterResource\Widgets\TankParametersChart;
use App\Models\TankParameter;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TankParameterResource extends Resource
{
    protected static ?string $model = TankParameter::class;

    protected static ?string $navigationIcon = 'phosphor-thermometer';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('date')
                    ->native(false)
                    ->default(now())
                    ->required(),
                TextInput::make('ammonia')
                    ->numeric()
                    ->inputMode('decimal')
                    ->required()
                    ->default(0),
                TextInput::make('nitrite')
                    ->numeric()
                    ->inputMode('decimal')
                    ->required()
                    ->default(0),
                TextInput::make('nitrate')
                    ->numeric()
                    ->inputMode('decimal')
                    ->required()
                    ->default(0),
                TextInput::make('ph')
                    ->numeric()
                    ->inputMode('decimal')
                    ->required()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')
                    ->date()
                    ->sortable(),
                TextColumn::make('ammonia')
                    ->sortable(),
                TextColumn::make('nitrite')
                    ->sortable(),
                TextColumn::make('nitrate')
                    ->sortable(),
                TextColumn::make('ph')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->deferLoading()
            ->deferFilters()
            ->striped()
            ->defaultSort('date', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTankParameters::route('/'),
            'create' => Pages\CreateTankParameter::route('/create'),
            'edit' => Pages\EditTankParameter::route('/{record}/edit'),
        ];
    }
    public static function getWidgets(): array
    {
        return [
            TankParametersChart::class
        ];
    }
    
}
