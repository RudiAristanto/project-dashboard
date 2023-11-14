<?php

namespace App\Filament\Resources\JanitorResource\Pages;

use App\Filament\Resources\JanitorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJanitor extends EditRecord
{
    protected static string $resource = JanitorResource::class;
    protected static ?string $title = 'Edit Petugas';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
