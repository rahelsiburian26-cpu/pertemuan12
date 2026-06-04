<?php

namespace App\Filament\Resources\JenisTrainingResource\Pages;

use App\Filament\Resources\JenisTrainingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisTraining extends EditRecord
{
    protected static string $resource = JenisTrainingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
