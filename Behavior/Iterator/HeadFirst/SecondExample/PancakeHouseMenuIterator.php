<?php
namespace BehavioralDesignPatterns\Iterator\HeadFirst\SecondExample;

use Iterator;

class PancakeHouseMenuIterator implements Iterator
{
    public $menuItems;
    public $position;

    public function __construct(array $items)
    {
        $this->position = 0;
        $this->menuItems = $items;
    }

    public function next() : MenuItem
    {
        $menuItem = $this->menuItems[$this->position];
        $this->position++;

        return $menuItem;
    }

    public function current()
    {

    }

    public function key()
    {

    }

    public function valid()
    {
        if ($this->position >= count($this->menuItems) || !isset($this->menuItems[$this->position]) || $this->menuItems[$this->position] == null) {
            return false;
        } else {
            return true;
        }
    }

    public function rewind()
    {

    }
}
