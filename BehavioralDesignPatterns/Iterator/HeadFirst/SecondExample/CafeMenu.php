<?php
namespace BehavioralDesignPatterns\Iterator\HeadFirst\SecondExample;

use Iterator;

class CafeMenu implements Menu
{
    public $menuItems;

    public function __construct()
    {
        $this->addItem("Veggie Burger and Air Fries.", "Veggie burger on a whole wheat bun, lettuce, tomato, and fries", true, 3.99);
        $this->addItem("Soup of the day", "A cup of the soup of the day, with a side salad", false, 3.69);
        $this->addItem("Burrito", "A large burrito,with whole pinto beans, salsa, guacamole", true, 4.29);
    }

    public function addItem(string $name, string $description, bool $vegetarian, float $price) : void
    {
        $menu = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems[] = $menu;
    }

    public function createIterator() : Iterator
    {
        return new CafeMenuIterator($this->menuItems);
    }
}
