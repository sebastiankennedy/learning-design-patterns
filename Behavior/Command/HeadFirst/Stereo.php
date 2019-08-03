<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class Stereo
{
    public function on() : void
    {
        echo "Turn on the stereo.\n";
    }

    public function off() : void
    {
        echo "Turn off the stereo.\n";
    }

    public function setCd() : void
    {
        echo "The stereo set the CD.\n";
    }

    public function setRadio() : void
    {
        echo "The stereo set the radio.\n";
    }

    public function setVolume(int $num) : void
    {
        echo "The Stereo set the volume to {$num}.\n";
    }
}
