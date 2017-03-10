<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class ChicagoStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ChicagoStyleVeggiePizza";
        $this->dough = "ChicagoStyle Veggie Dough";
        $this->sauce = "ChicagoStyle Veggie Sauce";
        $this->toppings[] = "ChicagoStyle Veggie Topping";
    }
}