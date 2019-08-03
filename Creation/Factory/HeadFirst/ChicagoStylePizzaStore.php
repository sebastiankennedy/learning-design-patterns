<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

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
