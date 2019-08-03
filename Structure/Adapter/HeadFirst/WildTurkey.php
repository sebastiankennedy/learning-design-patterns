<?php
namespace StructuralDesignPatterns\Adapter\HeadFirst;

class WildTurkey implements Turkey
{
    public function gobble() : void
    {
        echo "Gobble gobble.\n";
    }

    public function fly() : void
    {
        echo "I am flying a short distance.\n";
    }
}
