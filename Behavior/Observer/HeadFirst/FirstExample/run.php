<?php
// 自动加载
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../../../' . str_replace('\\', '/', $class) . '.php';
}

use BehavioralDesignPatterns\Observer\HeadFirst\FirstExample\CurrentConditionsDisplay;
use BehavioralDesignPatterns\Observer\HeadFirst\FirstExample\WeatherData;

// 观察者注册和观察者订阅主题耦合一起
$subject1 = new WeatherData();
$observer1 = new CurrentConditionsDisplay($subject1);
$observer2 = new CurrentConditionsDisplay($subject1);

$subject2 = new WeatherData();
$observer3 = new CurrentConditionsDisplay($subject2);
$observer4 = new CurrentConditionsDisplay($subject2);

$subject1->setMeasurements(80.11, 60.22, 70.33);
$subject2->setMeasurements(11.11, 22.22, 33.33);
echo "********************************************************\n";
$observer1->display();
$observer2->display();
$observer3->display();
$observer4->display();