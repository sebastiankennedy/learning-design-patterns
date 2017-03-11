<?php
namespace StructuralDesignPatterns\Decorator\HeadFirst;

class Mocha extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->price = 0.25;
        $this->beverage = $beverage;
        $this->description = "Mocha";
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