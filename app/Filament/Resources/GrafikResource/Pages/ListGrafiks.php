<?php

namespace App\Filament\Resources\GrafikResource\Pages;

use App\Filament\Resources\GrafikResource;
use App\Models\Grafik;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGrafiks extends ListRecords
{
    protected static string $resource = GrafikResource::class;

    protected static ?string $title = 'Grafik Sampah';

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }

    protected function getHeaderWidgets(): array
    {
        return [
            GrafikResource\Widgets\Grafikchart::class,
        ];
    }
}
