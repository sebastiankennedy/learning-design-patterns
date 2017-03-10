<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizzaIngredient;

use CreationalDesignPatterns\AbstractFactory\HeadFirst\AbstractPizzaIngredient\Sauce;

class MarinaraSauce extends Sauce
{
    public function __toString()
    {
        return "Marinara Sauce";
    }
}