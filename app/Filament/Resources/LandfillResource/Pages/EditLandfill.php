<?php

namespace App\Filament\Resources\LandfillResource\Pages;

use App\Filament\Resources\LandfillResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLandfill extends EditRecord
{
    protected static string $resource = LandfillResource::class;
    protected static ?string $title = 'Edit Tempat Sampah';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
