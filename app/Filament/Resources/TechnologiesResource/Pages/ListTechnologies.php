<?php

namespace App\Filament\Resources\TechnologiesResource\Pages;

use App\Filament\Resources\TechnologiesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTechnologies extends ListRecords
{
    protected static string $resource = TechnologiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
