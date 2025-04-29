<?php

namespace App\Filament\Resources\TankParameterResource\Pages;

use App\Filament\Resources\TankParameterResource;
use App\Filament\Resources\TankParameterResource\Widgets\TankParametersChart;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTankParameters extends ListRecords
{
    protected static string $resource = TankParameterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array {
        return [
            TankParametersChart::class
        ];
    }
}
