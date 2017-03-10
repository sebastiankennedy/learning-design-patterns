<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class ChicagoStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "ChicagoStyleClamPizza";
        $this->dough = "ChicagoStyle Clam Dough";
        $this->sauce = "ChicagoStyle Clam Sauce";
        $this->toppings[] = "ChicagoStyle Clam Topping";
    }
}