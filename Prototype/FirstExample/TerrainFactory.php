<?php
namespace Prototype\FirstExample;

class TerrainFactory
{
    private $sea;
    private $forest;
    private $plains;

    public function __construct(Sea $sea, Forest $forest, Plains $plains)
    {
        $this->sea = $sea;
        $this->forest = $forest;
        $this->plains = $plains;
    }

    public function getSea()
    {
        return clone $this->sea;
    }

    public function getPlains()
    {
        return clone $this->plains;
    }

    public function getForest()
    {
        return clone $this->forest;
    }
}
