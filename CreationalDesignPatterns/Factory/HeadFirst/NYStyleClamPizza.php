<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class NYStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NYStyleClamPizza";
        $this->dough = "NYStyle Clam Dough";
        $this->sauce = "NYStyle Clam Sauce";
        $this->toppings[] = "NYStyle Clam Topping";
    }
}