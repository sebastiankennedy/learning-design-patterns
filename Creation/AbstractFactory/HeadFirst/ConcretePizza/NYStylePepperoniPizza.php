<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizza;

use CreationalDesignPatterns\Factory\HeadFirst\Pizza;

class NYStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NYStylePepperoniPizza";
        $this->dough = "NYStyle Pepperoni Dough";
        $this->sauce = "NYStyle Pepperoni Sauce";
    }
}