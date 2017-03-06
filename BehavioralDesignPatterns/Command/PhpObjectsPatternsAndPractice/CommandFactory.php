<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

use Exception;

class CommandFactory
{
    private static $namespace = 'BehavioralDesignPatterns\\Command\\PhpObjectsPatternsAndPractice\\';

    public static function getCommand($action = 'Default')
    {
        if (preg_match('/\W/', $action)) {
            throw new Exception("illegal characters in action");
        }
        $class = static::$namespace . ucfirst(strtolower($action)) . "Command";
        $command = new $class();
        return $command;
    }
}
