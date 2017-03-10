<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class NYStyleClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NYStyleClamPizza";
        $this->dough = "";
        $this->sauce = "";
        $this->toppings[] = "";
    }
}