<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class Stereo
{
    public function on() : string
    {
        return "Turn on the stereo";
    }

    public function off() : string
    {
        return "Turn on the stereo";
    }

    public function setCd()
    {
        return "The stereo set the CD";
    }

    public function setRadio()
    {
        return "The stereo set the radio";
    }

    public function setVolume(int $num)
    {
        return "The Stereo set the volume to " . $num;
    }
}
