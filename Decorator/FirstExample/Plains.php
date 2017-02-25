<?php
namespace Decorator\FirstExample;

class Plains extends Tile
{
    private $wealthFactor = 2;

    public function getWealthFactor() : int
    {
        return $this->wealthFactor;
    }
}