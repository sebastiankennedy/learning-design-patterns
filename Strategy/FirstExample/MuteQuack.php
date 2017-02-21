<?php
namespace Strategy\FirstExample;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        return "do not thing!";
    }
}
