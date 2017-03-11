<?php
namespace StructuralDesignPatterns\Decorator\HeadFirst;

class DarkRoast extends Beverage
{
    public function cost() : float
    {
        return 1.99;
    }

    public function getDescription() : string
    {
        return 'A Cup of DarkRoast';
    }
}
