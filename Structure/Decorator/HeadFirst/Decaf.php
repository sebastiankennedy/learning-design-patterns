<?php
namespace StructuralDesignPatterns\Decorator\HeadFirst;

class Decaf extends Beverage
{
    public function cost() : float
    {
        return 2.99;
    }

    public function getDescription() : string
    {
        return 'A Cup of Decaf';
    }
}
