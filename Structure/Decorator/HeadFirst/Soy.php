<?php
namespace StructuralDesignPatterns\Decorator\HeadFirst;

class Soy extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->price = 0.35;
        $this->beverage = $beverage;
        $this->description = "Soy";
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