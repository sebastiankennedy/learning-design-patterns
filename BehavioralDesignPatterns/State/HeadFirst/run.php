<?php
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../../' . str_replace('\\', '/', $class) . '.php';
}

use BehavioralDesignPatterns\State\HeadFirst\GumballMachine;

$gumballMachine = new GumballMachine(10);
echo $gumballMachine;
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
