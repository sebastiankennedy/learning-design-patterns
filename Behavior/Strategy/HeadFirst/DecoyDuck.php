<?php
namespace Strategy\FirstExample;

class DecoyDuck extends Duck
{
    public function display()
    {
        return "this is a decoy duck !";
    }
}
