<?php
spl_autoload_register('autoload');

function autoload($class)
{
    require "../../../" . str_replace('\\', '/', $class) . '.php';
}

use StructuralDesignPatterns\Adapter\HeadFirst\{
    MallardDuck,
    WildTurkey,
    TurkeyAdapter
};

$duck = new MallardDuck();
echo $duck->quack();
echo $duck->fly();

$turkey = new WildTurkey();
echo $turkey->gobble();
echo $turkey->fly();

$duck = new TurkeyAdapter($turkey);
echo $duck->quack();
echo $duck->fly();