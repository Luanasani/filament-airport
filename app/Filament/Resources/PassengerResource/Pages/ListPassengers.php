<?php

namespace App\Filament\Resources\PassengerResource\Pages;

use App\Filament\Resources\PassengerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPassengers extends ListRecords
{
    protected static string $resource = PassengerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
