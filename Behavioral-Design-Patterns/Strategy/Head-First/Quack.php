<?php
namespace Strategy\FirstExample;

class Quack implements QuackBehavior
{
    public function quack()
    {
        return "quack! quack! quack!";
    }
}
