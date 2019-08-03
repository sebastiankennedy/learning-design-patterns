<?php
namespace StructuralDesignPatterns\Decorator\HeadFirst;

abstract class Beverage
{
    protected $price;
    protected $description;

    abstract public function cost() : float;

    abstract public function getDescription() : string;
}