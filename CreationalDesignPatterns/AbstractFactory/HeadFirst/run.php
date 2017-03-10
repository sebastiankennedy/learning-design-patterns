<?php
spl_autoload_register('autoload');
function autoload($class)
{
    require '../../../' . str_replace('\\', '/', $class) . '.php';
}

use CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizzaStore\NYStylePizzaStore;

$store = new NYStylePizzaStore();
$newYorkCheesePizza = $store->orderPizza('cheese');
