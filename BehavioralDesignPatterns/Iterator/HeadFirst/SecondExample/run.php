<?php
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../../../' . str_replace('\\', '/', $class) . '.php';
}

use BehavioralDesignPatterns\Iterator\HeadFirst\FirstExample\{
    Waitress, DinerMenu, PancakeHouseMenu
};

$dinerMenu = new DinerMenu();
$pancakeHouseMenu = new PancakeHouseMenu();
$waitress = new Waitress($dinerMenu, $pancakeHouseMenu);
$waitress->printMenu();