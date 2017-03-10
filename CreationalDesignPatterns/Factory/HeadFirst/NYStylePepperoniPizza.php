<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class NYStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NYStylePepperoniPizza";
        $this->dough = "";
        $this->sauce = "";
        $this->toppings[] = "";
    }
}