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
        $cmd = CommandFactory::getCommand($this->context->get('action'));

        if (!$cmd instanceof Command) {
            echo "execute is not instanceof Command Class !";
        }

        if (!$cmd->execute($this->context)) {
            echo "execute fail !";
        } else {
            echo "execute success !";
        }
    }
}