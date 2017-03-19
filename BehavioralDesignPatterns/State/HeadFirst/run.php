<?php
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../../../' . str_replace('\\', '/', $class) . '.php';
}

use BehavioralDesignPatterns\State\HeadFirst\GumballMachine;

$gumballMachine = new GumballMachine(10);
