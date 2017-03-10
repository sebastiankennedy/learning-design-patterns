<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizzaIngredient;

use CreationalDesignPatterns\AbstractFactory\HeadFirst\AbstractPizzaIngredient\Pepperoni;

class SlicedPepperoni extends Pepperoni
{
    public function __toString()
    {
        return "Sliced Pepperoni";
    }
}