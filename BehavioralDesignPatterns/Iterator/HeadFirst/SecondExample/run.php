<?php
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../../../' . str_replace('\\', '/', $class) . '.php';
}

use BehavioralDesignPatterns\Iterator\HeadFirst\SecondExample\{
    CafeMenu, Waitress, DinerMenu, PancakeHouseMenu
};

$cafeMenu = new CafeMenu();
$dinerMenu = new DinerMenu();
$pancakeHouseMenu = new PancakeHouseMenu();
$waitress = new Waitress($dinerMenu, $pancakeHouseMenu, $cafeMenu);
$waitress->printMenu();