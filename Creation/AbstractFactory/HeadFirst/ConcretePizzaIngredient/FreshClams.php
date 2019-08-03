<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizzaIngredient;

use CreationalDesignPatterns\AbstractFactory\HeadFirst\AbstractPizzaIngredient\Clam;

class FreshClams extends Clam
{
    public function __toString()
    {
        return "Fresh Clams";
    }
}