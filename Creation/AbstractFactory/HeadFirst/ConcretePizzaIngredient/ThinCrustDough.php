<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizzaIngredient;

use CreationalDesignPatterns\AbstractFactory\HeadFirst\AbstractPizzaIngredient\Dough;

class ThinCrustDough extends Dough
{
    public function __toString()
    {
        return "Thin Crust Dough";
    }
}