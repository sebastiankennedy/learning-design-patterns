<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class Stereo
{
    public function on() : void
    {
        echo "Turn on the stereo";
    }

    public function off() : void
    {
        echo "Turn on the stereo";
    }

    public function setCd() : void
    {
        echo "The stereo set the CD";
    }

    public function setRadio() : void
    {
        echo "The stereo set the radio";
    }

    public function setVolume(int $num) : void
    {
        echo "The Stereo set the volume to " . $num;
    }
}
