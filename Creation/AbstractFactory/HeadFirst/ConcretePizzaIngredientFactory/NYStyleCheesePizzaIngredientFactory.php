<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizzaIngredientFactory;

use CreationalDesignPatterns\AbstractFactory\HeadFirst\AbstractPizzaIngredient\{Cheese, Clam, Dough, Pepperoni, Sauce, Veggie};
use CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizzaIngredient\{FreshClams,
    Garlic,
    MarinaraSauce,
    ReggianoCheese,
    SlicedPepperoni,
    ThinCrustDough};
use CreationalDesignPatterns\AbstractFactory\HeadFirst\PizzaIngredientFactory;

class NYStyleCheesePizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createCheese() : Cheese
    {
        return new ReggianoCheese();
    }

    public function createClam() : Clam
    {
        return new FreshClams();
    }

    public function createDough() : Dough
    {
        return new ThinCrustDough();
    }

    public function createPepperoni() : Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createSauce() : Sauce
    {
        return new MarinaraSauce();
    }

    public function createVeggie() : Veggie
    {
        return new Garlic();
    }
}
