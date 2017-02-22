<?php
namespace Decorator\FirstExample;

class PollutedDecorator extends TileDecorator
{
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() + 2;
    }
}