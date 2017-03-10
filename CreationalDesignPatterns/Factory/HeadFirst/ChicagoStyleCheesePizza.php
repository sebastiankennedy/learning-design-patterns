<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ChicagoStyleCheesePizza";
        $this->dough = "ChicagoStyle Cheese Dough";
        $this->sauce = "ChicagoStyle Cheese Sauce";
        $this->toppings[] = "ChicagoStyle Cheese Topping";
    }
}