<?php
namespace Composite\FirstExample;

abstract class Unit
{
    public function getComposite()
    {
        return null;
    }

    public function addUnit(Unit $unit)
    {
        throw new \Exception(get_class($this) . " is a leaf.");
    }

    public function removeUnit(Unit $unit)
    {
        throw new \Exception(get_class($this) . " is a leaf.");
    }

    abstract public function bombardStrength();
}