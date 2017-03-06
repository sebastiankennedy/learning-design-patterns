<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

abstract class Command
{
    abstract function execute(CommandContext $context);
}
