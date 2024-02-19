<?php

namespace App\Charts;

use App\Models\StudentDemographicInfo;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class GradToUGradChart
{
    protected $chart;

    protected $data;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
        $this->data = StudentDemographicInfo::latest()->first();
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->addData([$this->data->graduate_count, $this->data->undergraduate_count])
            ->setTitle('enrollment type')
            ->setSubtitle('12 month rolling enrollment')
            ->setLabels(['graduate', 'undergraduate'])->setHeight(200)
            ->setColors(['#8b0000', '#EAB308']);
    }
}
