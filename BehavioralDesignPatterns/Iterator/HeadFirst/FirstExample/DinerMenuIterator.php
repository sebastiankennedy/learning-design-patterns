<?php
namespace BehavioralDesignPatterns\Iterator\HeadFirst\FirstExample;

class DinerMenuIterator implements Iterator
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

    public function hasNext() : bool
    {
        if ($this->position >= count($this->menuItems) || $this->menuItems[$this->position] == null) {
            return false;
        } else {
            return true;
        }
    }
}
