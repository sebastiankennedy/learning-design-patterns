<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizza;

use CreationalDesignPatterns\Factory\HeadFirst\Pizza;

class ChicagoStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ChicagoStyleVeggiePizza";
        $this->dough = "ChicagoStyle Veggie Dough";
        $this->sauce = "ChicagoStyle Veggie Sauce";
    }
}