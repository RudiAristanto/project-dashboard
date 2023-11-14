<?php

namespace App\Filament\Widgets;

use App\Models\Janitor;
use App\Models\landfill;
use App\Models\Vehicle;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Petugas', Janitor::all()->count())
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Kendaraan', Vehicle::all()->count())
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Tempat Sampah', landfill::all()->count())
                ->chart([20, 20, 20, 20, 20, 20, 20])
                ->color('success'),
            Stat::make('Processed', '192.1k')
                ->color('success')
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })",
                ]),
        ];
    }
}
