<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class NYStylePizzaStore extends PizzaStore
{
    public function createPizza(string $type) : Pizza
    {
        switch ($type) {
            case "cheese":
                return new NYStyleCheesePizza();
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
