<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ChicagoStyleCheesePizza";
        $this->dough = "Cheese Dough";
        $this->sauce = "Cheese Sauce";
        $this->toppings[] = "Cheese Topping";
    }
}