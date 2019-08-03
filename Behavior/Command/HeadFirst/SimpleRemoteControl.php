<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class SimpleRemoteControl
{
    public $slot;

    public function __construct()
    {

    }

    public function setCommand(Command $command) : void
    {
        $this->slot = $command;
    }

    public function buttonWasPressed() : void
    {
        $this->slot->execute();
    }
}
