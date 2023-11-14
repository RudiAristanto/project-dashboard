<?php

namespace App\Filament\Resources\LandfillResource\Pages;

use App\Filament\Resources\LandfillResource;
use App\Models\landfill;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLandfills extends ListRecords
{
    protected static string $resource = LandfillResource::class;
    protected static ?string $title = 'Daftar Tempat Sampah';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('+ Tambah'),
        ];
    }

    // protected function getHeaderWidgets(): array
    // {
    //     return [
    //         LandfillResource\Widgets\Landfillchart::class,
    //     ];
    // }
}
