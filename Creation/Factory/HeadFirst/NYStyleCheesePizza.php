<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NYStyleCheesePizza";
        $this->dough = "NYStyle Cheese Dough";
        $this->sauce = "NYStyle Cheese Sauce";
        $this->toppings[] = "NYStyle Cheese Topping";
    }
}