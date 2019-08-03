<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst;

use CreationalDesignPatterns\AbstractFactory\HeadFirst\AbstractPizzaIngredient\{Cheese, Clam, Dough, Pepperoni, Sauce, Veggie};

interface PizzaIngredientFactory
{
    public function createDough() : Dough;

    public function createSauce() : Sauce;

    public function createCheese() : Cheese;

    public function createVeggie() : Veggie;

    public function createPepperoni() : Pepperoni;

    public function createClam() : Clam;
}

