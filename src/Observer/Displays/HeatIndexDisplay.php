<?php

namespace App\Observer\Displays;

use App\Observer\ObserverInterface;
use App\Observer\SubjectInterface;

class HeatIndexDisplay implements ObserverInterface, DisplayElementInterface
{
    private $heatIndex = 0.0;

    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->heatIndex = $this->computeHeatIndex($temperature, $humidity);

        $this->display();
    }

    private function computeHeatIndex($temperature, $humidity)
    {
        $t = $temperature;
        $h = $humidity;

        return (16.923 + (0.185212 * $t) + (5.37941 * $h) - (0.100254 * $t * $h)
            + (0.00941695 * ($t * $t)) + (0.00728898 * ($h * $h))
            + (0.000345372 * ($t * $t * $h)) - (0.000814971 * ($t * $h * $h)) +
            (0.0000102102 * ($t * $t * $h * $h)) - (0.000038646 * ($t * $t * $t)) + (0.0000291583 *
            ($h * $h * $h)) + (0.00000142721 * ($t * $t * $t * $h)) +
            (0.000000197483 * ($t * $h * $h * $h)) - (0.0000000218429 * ($t * $t * $t * $h * $h)) +
            0.000000000843296 * ($t * $t * $h * $h * $h)) -
            (0.0000000000481975 * ($t * $t * $t * $h * $h * $h));
    }

    public function display()
    {
        echo sprintf('Heat index is %s', $this->heatIndex).PHP_EOL;
    }
}
