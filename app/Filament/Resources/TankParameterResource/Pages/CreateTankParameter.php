<?php

namespace App\Filament\Resources\TankParameterResource\Pages;

use App\Filament\Resources\TankParameterResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTankParameter extends CreateRecord
{
    protected static string $resource = TankParameterResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
