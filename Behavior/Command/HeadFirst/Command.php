<?php
namespace BehavioralDesignPatterns\Command\HeadFirst;

interface Command
{
    public function execute() : void;

    public function undo() : void;
}
