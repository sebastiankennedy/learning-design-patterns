<?php
namespace Strategy\FirstExample;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        return "fly no way!";
    }
}
