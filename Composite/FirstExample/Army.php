<?php
namespace Composite\FirstExample;

use Composite\FirstExample\CompositeUnit;

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