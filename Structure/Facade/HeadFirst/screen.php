<?php
namespace StructuralDesignPatterns\Facade\HeadFirst;

class Screen
{
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n";
    }
}
