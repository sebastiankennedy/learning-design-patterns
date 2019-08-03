<?php
namespace StructuralDesignPatterns\Decorator\PhpObjectsPatternsAndPractice\FirstExample;

class PollutedDecorator extends TileDecorator
{
    public function getWealthFactor() : int
    {
        return $this->tile->getWealthFactor() + 2;
    }
}