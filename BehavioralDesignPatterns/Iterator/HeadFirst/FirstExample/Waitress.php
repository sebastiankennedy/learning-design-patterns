<?php

namespace BehavioralDesignPatterns\Iterator\HeadFirst\FirstExample;

class Waitress
{
    public $pancakeHouseMenu;
    public $dinerMenu;

    public function __construct(DinerMenu $dinerMenu, PancakeHouseMenu $pancakeHouseMenu)
    {
        $this->dinerMenu = $dinerMenu;
        $this->pancakeHouseMenu = $pancakeHouseMenu;
    }

    public function printMenu()
    {
        $dinerMenuIterator = $this->dinerMenu->createIterator();
        $pancakeHouseMenuIterator = $this->pancakeHouseMenu->createIterator();
        echo "Menus\n -----\n Breakfast";
        $this->printMenuByIterator($dinerMenuIterator);
        echo "-----\n Lunch";
        $this->printMenuByIterator($pancakeHouseMenuIterator);
    }

    public function printMenuByIterator(Iterator $iterator)
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            echo sprintf("%s, %1.2f --%s.\n", $menuItem->getName(), $menuItem->getPrice(), $menuItem->getDescription());
        }
    }

    public function printBreakfastMenu()
    {

    }

    public function printLunchMenu()
    {

    }

    public function printVegetarianMenu()
    {

    }

    public function isItemVegetarian($name)
    {

    }
}
