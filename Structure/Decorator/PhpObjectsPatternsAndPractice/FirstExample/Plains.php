<?php
namespace StructuralDesignPatterns\Decorator\PhpObjectsPatternsAndPractice\FirstExample;

class Plains extends Tile
{
    private $wealthFactor = 2;

    public function getWealthFactor() : int
    {
        return $this->wealthFactor;
    }
}