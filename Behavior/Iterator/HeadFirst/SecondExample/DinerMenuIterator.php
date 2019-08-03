<?php
namespace BehavioralDesignPatterns\Iterator\HeadFirst\SecondExample;

use Iterator;

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

    public function remove()
    {
        if ($this->position <= 0) {
            throw new \Exception("You can't remove an item until you 've done at least one next()");
        }

        if ($this->menuItems[$this->position - 1] != null) {
            for ($i = $this->position - 1; $i < count($this->menuItems) - 1; $i++) {
                $this->menuItems[$i] = $this->menuItems[$i + 1];
            }
            $this->menuItems[count($this->menuItems) - 1] = null;
        }
    }
}
