<?php

namespace App\Filament\Resources\TechnologiesResource\Pages;

use App\Filament\Resources\TechnologiesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTechnologies extends EditRecord
{
    protected static string $resource = TechnologiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
