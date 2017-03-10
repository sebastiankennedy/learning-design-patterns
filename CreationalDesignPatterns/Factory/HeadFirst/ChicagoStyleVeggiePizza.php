<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class ChicagoStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ChicagoStyleVeggiePizza";
        $this->dough = "Veggie Dough";
        $this->sauce = "Veggie Sauce";
        $this->toppings[] = "Veggie Topping";
    }
}