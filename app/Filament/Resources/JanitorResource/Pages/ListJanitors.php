<?php

namespace App\Filament\Resources\JanitorResource\Pages;

use App\Filament\Resources\JanitorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJanitors extends ListRecords
{
    protected static string $resource = JanitorResource::class;
    protected static ?string $title = 'Daftar Petugas';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('+ Tambah'),
        ];
    }
}
