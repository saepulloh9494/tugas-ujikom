<?php

namespace App\Filament\Resources\TransactionTempResource\Pages;

use App\Filament\Resources\TransactionTempResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTransactionTemp extends EditRecord
{
    protected static string $resource = TransactionTempResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
