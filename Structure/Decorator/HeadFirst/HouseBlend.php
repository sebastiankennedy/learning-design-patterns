<?php
namespace StructuralDesignPatterns\Decorator\HeadFirst;

class HouseBlend extends Beverage
{
    public function cost() : float
    {
        return 4.99;
    }

    public function getDescription() : string
    {
        return 'A Cup of HouseBlend';
    }
}
