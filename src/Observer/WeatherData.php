<?php

namespace App\Observer;

class WeatherData implements SubjectInterface {

    protected $observers = [];

    private $temperature;

    private $humidity;

    private $pressure;

    public function registerObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer)
    {

    }

    public function notifyObservers()
    {
        foreach($this->observers as $observer)
        {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }

}
