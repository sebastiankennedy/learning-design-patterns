<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

class MacroCommand implements Command
{
    public $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute() : void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function undo() :void
    {
        foreach ($this->commands as $command) {
            $command->undo();
        }
    }
}