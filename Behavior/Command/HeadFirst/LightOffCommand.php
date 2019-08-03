<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class LightOffCommand implements Command
{
    public $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute() : void
    {
        $this->light->off();
    }

    public function undo() : void
    {
        $this->light->on();
    }
}
