<?php

namespace BehavioralDesignPatterns\Observer\HeadFirst\FirstExample;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure) : void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->display();
    }

    public function display() : void
    {
        echo sprintf("Current conditions: %01.2f F degrees and %01.2f humidity !\n", $this->temperature,
            $this->humidity);
    }
}
