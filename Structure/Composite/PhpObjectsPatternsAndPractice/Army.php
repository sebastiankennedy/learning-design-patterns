<?php
namespace Composite\FirstExample;

class Army extends CompositeUnit
{
    public function bombardStrength()
    {
        $result = 0;
        foreach ($this->units() as $unit) {
            $result += $unit->bombardStrength();
        }
        return $result;
    }
}