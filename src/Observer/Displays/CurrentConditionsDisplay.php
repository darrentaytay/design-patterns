<?php

namespace App\Observer\Displays;

use App\Observer\ObserverInterface;
use App\Observer\SubjectInterface;

class CurrentConditionsDisplay implements ObserverInterface, DisplayElementInterface {

    private $weatherData;

    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        echo sprintf("Current conditions: %sF degrees and %s %% humidity", $this->temperature, $this->humidity) . PHP_EOL;
    }

}
