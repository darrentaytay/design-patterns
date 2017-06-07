<?php

namespace App\Observer\Displays;

use App\Observer\ObserverInterface;
use App\Observer\SubjectInterface;

class ForecastDisplay implements ObserverInterface, DisplayElementInterface
{
    private $currentPressure = 29.92;

    private $lastPressure;

    private $numberOfReadings;

    private $weatherData;

    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;

        $this->display();
    }

    public function display()
    {
        $message = 'Forecast: ';

        if ($this->currentPressure > $this->lastPressure) {
            $message .= 'Improving weather on the way!';
        } elseif ($this->currentPressure == $this->lastPressure) {
            $message .= 'More of the same';
        } elseif ($this->currentPressure < $this->lastPressure) {
            $message .= 'Watch out for cooler, rainy weather';
        }

        echo $message.PHP_EOL;
    }
}
