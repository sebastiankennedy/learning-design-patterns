<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizzaIngredient;

use CreationalDesignPatterns\AbstractFactory\HeadFirst\AbstractPizzaIngredient\Veggie;

class Garlic extends Veggie
{
    public function __toString()
    {
        return "Garlic";
    }
}