<?php

namespace BehavioralDesignPatterns\Observer\HeadFirst\SecondExample;

use SplSubject;
use SplObserver;

class CurrentConditionsDisplay implements SplObserver
{
    private $temperature;
    private $humidity;
    private $pressure;

    public function update(SplSubject $subject)
    {
        $this->temperature = $subject->temperature;
        $this->humidity = $subject->humidity;
        $this->pressure = $subject->pressure;

        echo sprintf("Current conditions: %01.2f F degrees and %01.2f humidity !\n", $this->temperature,
            $this->humidity);
    }
}