<?php
namespace Visitor\FirstExample;

class TroopCarrierUnit extends CompositeUnit
{
    public function addUnit(Unit $unit)
    {
        if ($unit instanceof Cavalry) {
            throw new \Exception("Can't get a horse on the vehicle");
        }
        parent::addUnit($unit);
    }

    public function bombardStrength()
    {
        return 0;
    }
}