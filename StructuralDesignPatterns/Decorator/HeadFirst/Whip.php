<?php
namespace StructuralDesignPatterns\Decorator\HeadFirst;

class Whip extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->price = 0.45;
        $this->beverage = $beverage;
        $this->description = "Whip";
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