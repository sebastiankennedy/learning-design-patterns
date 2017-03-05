<?php
namespace Visitor\FirstExample;

abstract class CompositeUnit extends Unit
{
    private $units = [];

    public function getComposite()
    {
        return $this;
    }

    public function removeUnit(Unit $unit)
    {
        $this->units = array_udiff($this->units, [$unit], function($a, $b) {
            return ($a === $b) ? 0 : 1;
        });
    }

    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)) {
            return '';
        }
        $unit->setDepth($this->depth + 1);
        $this->units[] = $unit;
    }

    public function accept(ArmyVisitor $visitor)
    {
        parent::accept($visitor);
        foreach ($this->units as $thisUnit) {
            $thisUnit->accept($visitor);
        }
    }

    protected function units()
    {
        return $this->units;
    }
}
