<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class RemoteControlTest
{
    public function __construct()
    {
        $light = new Light();
        $lightOn = new LightOnCommand($light);

        $remote = new SimpleRemoteControl();
        $remote->setCommand($lightOn);
        $remote->buttonWasPressed();
    }
}
