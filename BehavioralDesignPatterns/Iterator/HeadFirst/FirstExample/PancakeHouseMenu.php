<?php
namespace BehavioralDesignPatterns\Iterator\HeadFirst\FirstExample;

class PancakeHouseMenu
{
    public $menuItems;

    public function __construct()
    {
        $this->menuItems = [];

        $this->addItem("K&B Pancake Breakfast", "Pancakes with scrambled eggs, and toast", false, 2.99);
        $this->addItem("Regular Pancake Breakfast", "Pancakes with fried eggs, sausage", false, 2.99);
        $this->addItem("Blueberry Pancakes", "Pancakes made with fresh blueberries", true, 3.49);
        $this->addItem("Waffles", "Waffles,with your choice of blueberries or strawberries", true, 3.59);
    }

    public function addItem(string $name, string $description, bool $vegetarian, double $price) : void
    {
        $menu = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems[] = $menu;
    }

    public function getMenuItems() : array
    {
        return $this->menuItems;
    }

    public function createIterator()
    {
        return new PancakeHouseMenuIterator($this->menuItems);
    }
}
