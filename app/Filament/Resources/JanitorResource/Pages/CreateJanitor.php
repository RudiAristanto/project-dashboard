<?php

namespace App\Filament\Resources\JanitorResource\Pages;

use App\Filament\Resources\JanitorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJanitor extends CreateRecord
{
    protected static string $resource = JanitorResource::class;
    protected static ?string $title = 'Tambah Petugas';
}
