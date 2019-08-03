<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizza;

use CreationalDesignPatterns\Factory\HeadFirst\Pizza;

class NYStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NYStyleClamPizza";
        $this->dough = "NYStyle Clam Dough";
        $this->sauce = "NYStyle Clam Sauce";
    }
}