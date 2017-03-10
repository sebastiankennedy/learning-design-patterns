<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizza;

use CreationalDesignPatterns\Factory\HeadFirst\Pizza;

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ChicagoStyleCheesePizza";
        $this->dough = "ChicagoStyle Cheese Dough";
        $this->sauce = "ChicagoStyle Cheese Sauce";
    }
}