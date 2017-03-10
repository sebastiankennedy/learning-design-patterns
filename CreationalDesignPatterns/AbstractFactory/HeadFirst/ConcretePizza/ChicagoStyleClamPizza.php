<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizza;

use CreationalDesignPatterns\Factory\HeadFirst\Pizza;

class ChicagoStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ChicagoStyleClamPizza";
        $this->dough = "ChicagoStyle Clam Dough";
        $this->sauce = "ChicagoStyle Clam Sauce";
    }
}