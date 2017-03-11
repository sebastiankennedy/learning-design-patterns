<?php
namespace StructuralDesignPatterns\Decorator\HeadFirst;

class Milk extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->price = 0.15;
        $this->beverage = $beverage;
        $this->description = "Milk";
    }

    public function getDescription() : string
    {
        return $this->beverage->getDescription() . ' with ' . $this->description;
    }

    public function cost() : float
    {
        return $this->beverage->cost() + $this->price;
    }
}