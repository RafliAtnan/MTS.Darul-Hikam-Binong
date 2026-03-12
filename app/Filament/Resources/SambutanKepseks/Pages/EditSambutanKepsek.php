<?php

namespace App\Filament\Resources\SambutanKepseks\Pages;

use App\Filament\Resources\SambutanKepseks\SambutanKepsekResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSambutanKepsek extends EditRecord
{
    protected static string $resource = SambutanKepsekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
