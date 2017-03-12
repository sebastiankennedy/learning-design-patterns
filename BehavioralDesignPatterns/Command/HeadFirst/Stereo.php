<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class Stereo
{
    public function on() : string
    {
        echo "Turn on the stereo";
    }

    public function off() : string
    {
        echo "Turn on the stereo";
    }

    public function setCd()
    {
        echo "The stereo set the CD";
    }

    public function setRadio()
    {
        echo "The stereo set the radio";
    }

    public function setVolume(int $num)
    {
        echo "The Stereo set the volume to " . $num;
    }
}
