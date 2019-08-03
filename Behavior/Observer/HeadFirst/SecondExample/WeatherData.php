<?php

namespace BehavioralDesignPatterns\Observer\HeadFirst\SecondExample;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class WeatherData implements SplSubject
{
    private $observers;
    public $temperature;
    public $humidity;
    public $pressure;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function measurementsChanged()
    {
        $this->notify();
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

;

