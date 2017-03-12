<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class StereoOnWithCDCommand
{
    public $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(11);
    }
}
