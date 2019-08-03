<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizzaIngredient;

use CreationalDesignPatterns\AbstractFactory\HeadFirst\AbstractPizzaIngredient\Cheese;

class ReggianoCheese extends Cheese
{
    public function __toString()
    {
        return "Reggiano Cheese";
    }
}