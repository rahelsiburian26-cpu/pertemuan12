<?php

namespace App\Filament\Resources\JenisTrainingResource\Pages;

use App\Filament\Resources\JenisTrainingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisTrainings extends ListRecords
{
    protected static string $resource = JenisTrainingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
