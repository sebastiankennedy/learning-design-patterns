<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class NYStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NYStyleVeggiePizza";
        $this->dough = "";
        $this->sauce = "";
        $this->toppings[] = "";
    }
}