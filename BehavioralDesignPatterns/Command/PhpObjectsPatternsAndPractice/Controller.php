<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

class Controller
{
    private $context;

    public function __construct()
    {
        $this->context = new CommandContext();
    }

    public function getContext()
    {
        return $this->context;
    }

    public function process()
    {
        $command = CommandFactory::getCommand($this->context->get('action'));

        if (!$command instanceof Command) {
            echo "execute is not instanceof Command Class !";
        }

        if (!$command->execute($this->context)) {
            echo "execute fail !\n";
        } else {
            echo "execute success !\n";
        }
    }
}