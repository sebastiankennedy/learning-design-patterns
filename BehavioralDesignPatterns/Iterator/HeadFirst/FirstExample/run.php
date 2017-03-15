<?php
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../../../' . str_replace('\\', '/', $class) . '.php';
}

use BehavioralDesignPatterns\Iterator\HeadFirst\FirstExample\{
    Waitress, DinerMenu, PancakeHouseMenu
};

$waitress = new Waitress(new DinerMenu(), new PancakeHouseMenu());
