<?php

namespace App\Filament\Resources\TankParameterResource\Pages;

use App\Filament\Resources\TankParameterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTankParameter extends EditRecord
{
    protected static string $resource = TankParameterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
