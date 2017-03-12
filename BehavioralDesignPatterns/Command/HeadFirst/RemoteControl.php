<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class RemoteControl
{
    public $onCommand;
    public $offCommand;

    public function __construct()
    {
        $this->onCommand = [];
        $this->offCommand = [];
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand) : void
    {
        $this->onCommand[$slot] = $onCommand;
        $this->offCommand[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot) : void
    {
        $this->onCommand[$slot]->execute();
    }

    public function offButtonWasPushed(int $slot) : void
    {
        $this->offCommand[$slot]->execute();
    }

    public function __toString() : string
    {
        $string = "";
        foreach (range(0, count($this->onCommand) - 1) as $slot) {
            $string .= $this->onCommand[$slot]->execute() . "    " . $this->offCommand[$slot]->execute();
        }

        return $string;
    }
}
