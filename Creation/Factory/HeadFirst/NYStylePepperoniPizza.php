<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class NYStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NYStylePepperoniPizza";
        $this->dough = "NYStyle Pepperoni Dough";
        $this->sauce = "NYStyle Pepperoni Sauce";
        $this->toppings[] = "NYStyle Pepperoni Topping";
    }
}