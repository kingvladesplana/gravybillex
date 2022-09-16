<?php

namespace App\Filament\Resources\FundraiserResource\Pages;

use App\Filament\Resources\FundraiserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFundraiser extends EditRecord
{
    protected static string $resource = FundraiserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
