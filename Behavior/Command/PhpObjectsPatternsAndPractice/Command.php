<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

// 抽象命令类
abstract class Command
{
    abstract function execute(CommandContext $context) : bool;
}
