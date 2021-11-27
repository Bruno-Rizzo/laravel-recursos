<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\donutChart
    {
        return $this->chart->donutChart()
            ->setTitle('Usuários do Sistema')
            ->setSubtitle('Ano Base - 2021')
            ->addData([
                \App\Models\Usuario::where('sexo','=','feminino')->count(),
                \App\Models\Usuario::where('sexo','=','masculino')->count(),
            ])
            ->setLabels(['Mulheres', 'Homens'])
            ->setColors(['#D32F2F', '#03A9F4']);

    }
}
