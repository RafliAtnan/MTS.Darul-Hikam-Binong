<?php

namespace App\Filament\Resources\SambutanKepseks\Pages;

use App\Filament\Resources\SambutanKepseks\SambutanKepsekResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSambutanKepseks extends ListRecords
{
    protected static string $resource = SambutanKepsekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
