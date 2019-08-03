<?php
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../../../' . str_replace('\\', '/', $class) . '.php';
}

use BehavioralDesignPatterns\Observer\HeadFirst\SecondExample\CurrentConditionsDisplay;
use BehavioralDesignPatterns\Observer\HeadFirst\SecondExample\WeatherData;

$subject = new WeatherData();
$observer1 = new CurrentConditionsDisplay();
$observer2 = new CurrentConditionsDisplay();
$observer3 = new CurrentConditionsDisplay();

$subject->attach($observer1);
$subject->attach($observer2);
$subject->attach($observer3);
$subject->setMeasurements(111.222, 222.333, 333.444);

$subject->detach($observer1);
$subject->setMeasurements(222, 222, 222);

