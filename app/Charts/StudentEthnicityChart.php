<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class StudentEthnicityChart
{
    /** @var LarapexChart */
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LarapexChart
    {
        return $this->chart->barChart()
            ->addData('percentage of student body', [.5, .1, 4.0, 12.6, 70.7, 6.1, 2.8, 2.3])
            ->setTitle('student  ethnicity')
            ->setXAxis(['native american', 'pacific islander', 'asian', 'black', 'white', 'hispanic', 'two or more', 'unknown'])
            ->setColors(['#8b0000'])
            ->setHeight(300);
    }
}
