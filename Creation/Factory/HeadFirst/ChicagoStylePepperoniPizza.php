<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class ChicagoStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ChicagoStylePepperoniPizza";
        $this->dough = "ChicagoStyle Pepperoni Dough";
        $this->sauce = "ChicagoStyle Pepperoni Sauce";
        $this->toppings[] = "ChicagoStyle Pepperoni Topping";
    }
}