<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class Light
{
    public function on() : void
    {
        echo "The light is on";
    }

    public function off() : void
    {
        echo "The light is off";
    }
}