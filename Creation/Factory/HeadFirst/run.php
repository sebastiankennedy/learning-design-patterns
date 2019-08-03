<?php
spl_autoload_register('autoload');
function autoload($class)
{
    require '../../../' . str_replace('\\', '/', $class) . '.php';
}

use CreationalDesignPatterns\Factory\HeadFirst\{ChicagoStylePizzaStore, NYStylePizzaStore};

$nyStylePizzaStore = new NYStylePizzaStore();
$chicagoStylePizzaStore = new ChicagoStylePizzaStore();

$nyStyleCheesePizza = $nyStylePizzaStore->orderPizza("cheese");
$chicagoCheesePizza = $chicagoStylePizzaStore->orderPizza("cheese");
