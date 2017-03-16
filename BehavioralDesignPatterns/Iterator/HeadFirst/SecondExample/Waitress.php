<?php

namespace BehavioralDesignPatterns\Iterator\HeadFirst\SecondExample;

use Iterator;

class Waitress
{
    public $pancakeHouseMenu;
    public $dinerMenu;

    public function __construct(DinerMenu $dinerMenu, PancakeHouseMenu $pancakeHouseMenu)
    {
        $this->dinerMenu = $dinerMenu;
        $this->pancakeHouseMenu = $pancakeHouseMenu;
    }

    public function printMenu() : void
    {
        $dinerMenuIterator = $this->dinerMenu->createIterator();
        $pancakeHouseMenuIterator = $this->pancakeHouseMenu->createIterator();
        echo "Menus\n-----\nBreakfast";
        $this->printMenuByIterator($dinerMenuIterator);
        echo "-----\nLunch\n";
        $this->printMenuByIterator($pancakeHouseMenuIterator);
    }

    public function printMenuByIterator(Iterator $iterator) : void
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            echo sprintf("%s, %1.2f --%s.\n", $menuItem->getName(), $menuItem->getPrice(), $menuItem->getDescription());
        }
    }

    public function printBreakfastMenu() : void
    {

    }

    public function printLunchMenu() : void
    {

    }

    public function printVegetarianMenu() : void
    {

    }

    public function isItemVegetarian($name) : bool
    {

    }
}
