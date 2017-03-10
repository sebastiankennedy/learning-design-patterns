<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class ChicagoStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ChicagoStylePepperoniPizza";
        $this->dough = "Pepperoni Dough";
        $this->sauce = "Pepperoni Sauce";
        $this->toppings[] = "Pepperoni Topping";
    }
}