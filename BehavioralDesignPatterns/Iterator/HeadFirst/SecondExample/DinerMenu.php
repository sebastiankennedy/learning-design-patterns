<?php
namespace BehavioralDesignPatterns\Iterator\HeadFirst\SecondExample;

use Iterator;

class DinerMenu implements Menu
{
    const MAX_ITEMS = 6;
    public $menuItems;
    public $numberOfItems = 0;

    public function __construct()
    {
        $this->menuItems[self::MAX_ITEMS] = null;
        $this->addItem("Vegetarian BLT", "(Fakin) Bcaon with lettuce & tomato on whole wheat", true, 2.99);
        $this->addItem("BLT", "Bacon with lettuce & tomato on whole wheat", false, 2.99);
        $this->addItem("Soup of the day", "Soup of the day,with a side of potato salad", false, 3.29);
        $this->addItem("Hot dog", "A ot dog, with saurkraut,relish,onions,topped with cheese", false, 3.05);
    }

    public function addItem(string $name, string $description, bool $vegetarian, float $price) : void
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        if ($this->numberOfItems >= self::MAX_ITEMS) {
            echo "Sorry, menu is full! Can't add item to menu.\n";
        } else {
            $this->menuItems[$this->numberOfItems] = $menuItem;
            $this->numberOfItems++;
        }
    }

    public function getMenuItems() : array
    {
        return $this->menuItems;
    }

    public function createIterator() : Iterator
    {
        return new DinerMenuIterator($this->menuItems);
    }
}
