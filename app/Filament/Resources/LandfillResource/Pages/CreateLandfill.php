<?php

namespace App\Filament\Resources\LandfillResource\Pages;

use App\Filament\Resources\LandfillResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLandfill extends CreateRecord
{
    protected static string $resource = LandfillResource::class;
    protected static ?string $title = 'Tambah Tempat Sampah';
}
