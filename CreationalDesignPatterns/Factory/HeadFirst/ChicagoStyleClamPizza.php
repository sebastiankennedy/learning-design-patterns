<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class ChicagoStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ChicagoStyleClamPizza";
        $this->dough = "Clam Dough";
        $this->sauce = "Clam Sauce";
        $this->toppings[] = "Clam Topping";
    }
}