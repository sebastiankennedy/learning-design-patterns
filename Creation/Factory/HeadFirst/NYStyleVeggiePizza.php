<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class NYStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NYStyleVeggiePizza";
        $this->dough = "NYStyle Veggie Dough";
        $this->sauce = "NYStyle Veggie Sauce";
        $this->toppings[] = "NYStyle Veggie Topping";
    }
}