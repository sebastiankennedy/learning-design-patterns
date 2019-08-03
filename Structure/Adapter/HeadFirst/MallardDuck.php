<?php
namespace StructuralDesignPatterns\Adapter\HeadFirst;

class MallardDuck implements Duck
{
    public function quack() : void
    {
        echo "Quack.\n";
    }

    public function fly() : void
    {
        echo "I am flying.\n";
    }
}
