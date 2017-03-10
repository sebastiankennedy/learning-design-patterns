<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizzaStore;

use CreationalDesignPatterns\AbstractFactory\HeadFirst\{
    PizzaStore,
    Pizza
};

use CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizza\{
    NYStyleCheesePizza,
    NYStylePepperoniPizza,
    NYStyleClamPizza,
    NYStyleVeggiePizza
};
use CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizzaIngredientFactory\NYStyleCheesePizzaIngredientFactory;

class NYStylePizzaStore extends PizzaStore
{
    public function createPizza(string $type) : Pizza
    {
        $pizzaIngredientFactory = new NYStyleCheesePizzaIngredientFactory();
        switch ($type) {
            case "cheese":
                $pizza = new NYStyleCheesePizza($pizzaIngredientFactory);
                $pizza->setName("New York Cheese Pizza");
                return $pizza;
                break;
            case "pepperoni":
                return new NYStylePepperoniPizza();
                break;
            case "clam":
                return new NYStyleClamPizza();
                break;
            case "veggie":
                return new NYStyleVeggiePizza();
                break;
        }
    }
}
