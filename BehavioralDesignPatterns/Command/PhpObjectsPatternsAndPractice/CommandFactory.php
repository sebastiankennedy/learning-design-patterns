<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

use Exception;

// 命令工厂、命令客户端
class CommandFactory
{
    private static $namespace = 'BehavioralDesignPatterns\\Command\\PhpObjectsPatternsAndPractice\\';

    public static function getCommand($action = 'Default') : Command
    {
        if (preg_match('/\W/', $action)) {
            throw new Exception("illegal characters in action");
        }
        $class = static::$namespace . ucfirst(strtolower($action)) . "Command";
        $command = new $class();

        return $command;
    }
}
