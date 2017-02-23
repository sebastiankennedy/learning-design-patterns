<?php
namespace Strategy\SecondExample;

class MarkLogicMarker extends Marker{
    private $engine;

    public function __construct($test)
    {
        parent::__construct($test);
    }

    public function mark($response)
    {
        return true;
    }
}