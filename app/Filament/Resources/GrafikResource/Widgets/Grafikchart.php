<?php

namespace App\Filament\Resources\GrafikResource\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Landfill;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class Grafikchart extends ChartWidget
{
    protected static ?string $heading = 'Grafik Sampah Perhari';

    protected int | string | array $columnSpan = 'full';

    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        $data = Trend::model(landfill::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'total sampah',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
