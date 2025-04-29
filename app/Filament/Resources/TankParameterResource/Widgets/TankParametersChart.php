<?php

namespace App\Filament\Resources\TankParameterResource\Widgets;

use App\Models\TankParameter;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class TankParametersChart extends ChartWidget
{
    protected static ?string $heading = 'Tank Parameters';

    protected function getData(): array
    {

        $parameters = TankParameter::orderBy('date', 'asc')->where('date', '>=', now()->addDays(-30))->take(30)->get();

        $labels = $parameters->map(fn(TankParameter $parameter) => Carbon::parse($parameter->date)->format('d M'));
        $datasets = $parameters->reduce(function(array $carry, TankParameter $tankParameter) {
            return [
                [
                    ...$carry[0],
                    'data' => [...$carry[0]['data'], $tankParameter->ammonia]
                ],
                [
                    ...$carry[1],
                    'data' => [...$carry[1]['data'], $tankParameter->nitrite]
                ],
                [
                    ...$carry[2],
                    'data' => [...$carry[2]['data'], $tankParameter->nitrate]
                ],
                [
                    ...$carry[3],
                    'data' => [...$carry[3]['data'], $tankParameter->ph]
                ],
            ];
        }, [
            [
                'label' => 'Ammonia',
                'data' => [],
                // 'borderColor' => '#3b82f6',
            ],
            [
                'label' => 'Nitrite',
                'data' => [],
                'borderColor' => 'oklch(54.6% 0.245 262.881)'
            ],
            [
                'label' => 'Nitrate',
                'data' => [],
                'borderColor' => 'oklch(60.9% 0.126 221.723)'
            ],
            [
                'label' => 'Ph',
                'data' => [],
                'borderColor' => 'oklch(62.7% 0.194 149.214)'
            ],
        ]);

        // dd($datasets);

        return [
            'datasets' => $datasets,
            'labels' => $labels
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    // public function getColumnSpan(): array|int|string {
    //     return 'full';
    // }
}
