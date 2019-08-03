<?php
namespace Strategy\SecondExample;

abstract class Marker
{
    protected $test;

    public function __construct($test)
    {
        $this->test = $test;
    }

    abstract function mark($response);
}