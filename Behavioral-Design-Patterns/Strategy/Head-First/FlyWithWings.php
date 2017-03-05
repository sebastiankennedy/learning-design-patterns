<?php
namespace Strategy\FirstExample;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        return "fly with wings!";
    }
}
