<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class LightOnCommand implements Command
{
    public $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute() : void
    {
        $this->light->on();
    }

    public function undo() : void
    {
        $this->light->off();
    }
}
