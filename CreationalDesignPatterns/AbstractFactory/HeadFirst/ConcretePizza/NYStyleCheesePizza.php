<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizza;

use CreationalDesignPatterns\AbstractFactory\HeadFirst\PizzaIngredientFactory;
use CreationalDesignPatterns\AbstractFactory\HeadFirst\Pizza;

class NYStyleCheesePizza extends Pizza
{
    public $pizzaIngredientFactory;

    public function __construct(PizzaIngredientFactory $pizzaIngredientFactory)
    {
        $this->pizzaIngredientFactory = $pizzaIngredientFactory;
        $this->dough = $this->pizzaIngredientFactory->createDough();
        $this->sauce = $this->pizzaIngredientFactory->createSauce();
        $this->veggie = $this->pizzaIngredientFactory->createVeggie();
        $this->cheese = $this->pizzaIngredientFactory->createCheese();
        $this->pepperoni = $this->pizzaIngredientFactory->createPepperoni();
        $this->clam = $this->pizzaIngredientFactory->createClam();
    }

    public function prepare() : void
    {
        printf("Preparing " . $this->name . "...\n");
        printf("Tossing " . $this->dough . "...\n");
        printf("Adding " . $this->sauce . "...\n");
        printf("Adding " . $this->veggie . "...\n");
        printf("Adding " . $this->cheese . "...\n");
        printf("Adding " . $this->pepperoni . "...\n");
        printf("Adding " . $this->clam . "...\n");
    }
}