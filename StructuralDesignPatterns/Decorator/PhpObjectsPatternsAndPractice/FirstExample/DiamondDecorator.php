<?php
namespace StructuralDesignPatterns\Decorator\PhpObjectsPatternsAndPractice\FirstExample;

class DiamondDecorator extends TileDecorator
{
    public function getWealthFactor() : int
    {
        return $this->tile->getWealthFactor() + 2;
    }
}