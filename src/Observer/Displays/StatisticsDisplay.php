<?php

namespace App\Observer\Displays;

use App\Observer\ObserverInterface;
use App\Observer\SubjectInterface;

class StatisticsDisplay implements ObserverInterface, DisplayElementInterface
{
    private $maximumTemperature = 0.0;

    private $minimumTemperature = 200;

    private $temperatureSum = 0.0;

    private $numberOfReadings;

    private $weatherData;

    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperatureSum += $temperature;
        $this->numberOfReadings++;

        if ($temperature > $this->maximumTemperature) {
            $this->maximumTemperature = $temperature;
        }

        if ($temperature < $this->minimumTemperature) {
            $this->minimumTemperature = $temperature;
        }

        $this->display();
    }

    public function display()
    {
        $averageTemperature = $this->temperatureSum / $this->numberOfReadings;

        echo sprintf(
            'Average/Maximum/Minimum temperature =  %s/%s/%s',
            $averageTemperature,
            $this->maximumTemperature,
            $this->minimumTemperature
        ).PHP_EOL;
    }
}
