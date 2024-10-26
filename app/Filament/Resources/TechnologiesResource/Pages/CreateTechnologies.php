<?php

namespace App\Filament\Resources\TechnologiesResource\Pages;

use App\Filament\Resources\TechnologiesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTechnologies extends CreateRecord
{
    protected static string $resource = TechnologiesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
