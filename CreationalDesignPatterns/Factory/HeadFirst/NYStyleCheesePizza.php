<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NYStyleCheesePizza";
        $this->dough = "";
        $this->sauce = "";
        $this->toppings[] = "";
    }
}