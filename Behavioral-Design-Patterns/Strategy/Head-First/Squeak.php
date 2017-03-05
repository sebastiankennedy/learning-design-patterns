<?php
namespace Strategy\FirstExample;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        return "squeak! squeak! squeak!";
    }
}
