<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizza;

use CreationalDesignPatterns\Factory\HeadFirst\Pizza;

class ChicagoStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ChicagoStylePepperoniPizza";
        $this->dough = "ChicagoStyle Pepperoni Dough";
        $this->sauce = "ChicagoStyle Pepperoni Sauce";
    }
}