<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizzaStore;

use CreationalDesignPatterns\AbstractFactory\HeadFirst\{Pizza, PizzaStore};
use CreationalDesignPatterns\AbstractFactory\HeadFirst\ConcretePizza\{ChicagoStyleCheesePizza,
    ChicagoStyleClamPizza,
    ChicagoStylePepperoniPizza,
    ChicagoStyleVeggiePizza};

class ChicagoStylePizzaStore extends PizzaStore
{
    public function createPizza(string $type) : Pizza
    {
        switch ($type) {
            case "cheese":
                return new ChicagoStyleCheesePizza();
                break;
            case "pepperoni":
                return new ChicagoStylePepperoniPizza();
                break;
            case "clam":
                return new ChicagoStyleClamPizza();
                break;
            case "veggie":
                return new ChicagoStyleVeggiePizza();
                break;
        }
    }
}
