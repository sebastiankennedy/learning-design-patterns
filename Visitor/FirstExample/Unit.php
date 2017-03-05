<?php
namespace Visitor\FirstExample;

abstract class Unit
{
    public $depth;

    abstract public function bombardStrength();

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

    public function accept(ArmyVisitor $visitor)
    {
        $method = "visit" . get_class($this);
        $visitor->$method($this);
    }

    public function getDepth()
    {
        return $this->depth;
    }

    public function setDepth($depth)
    {
        $this->depth = $depth;
    }
}