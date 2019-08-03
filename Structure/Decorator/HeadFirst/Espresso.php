<?php
namespace StructuralDesignPatterns\Decorator\HeadFirst;

class Espresso extends Beverage
{
    public function cost() : float
    {
        return 3.99;
    }

    public function getDescription() : string
    {
        return 'A Cup of Espresso';
    }
}
