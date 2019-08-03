<?php

namespace BehavioralDesignPatterns\Observer\HeadFirst\FirstExample;

class WeatherData implements Subject
{
    private $observers;
    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(Observer $observer) : void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer) : void
    {
        if (($index = array_search($observer, $this->observers)) !== false) {
            unset($this->observers[$index]);
        }
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure) : void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function measurementsChanged() : void
    {
        $this->notifyObservers();
    }

    public function notifyObservers() : void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }
}
