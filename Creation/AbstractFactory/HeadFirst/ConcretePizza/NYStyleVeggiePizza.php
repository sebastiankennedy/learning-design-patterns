<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizza;

use CreationalDesignPatterns\Factory\HeadFirst\Pizza;

class NYStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NYStyleVeggiePizza";
        $this->dough = "NYStyle Veggie Dough";
        $this->sauce = "NYStyle Veggie Sauce";
    }
}