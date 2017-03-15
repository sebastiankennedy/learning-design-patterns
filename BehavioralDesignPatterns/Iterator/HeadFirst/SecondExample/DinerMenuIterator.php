<?php
namespace BehavioralDesignPatterns\Iterator\HeadFirst;

use Iterator;

class DinerMenuIterator implements Iterator
{
    public $list;
    public $position = 0;

    public function __construct(array $list)
    {
        $this->list = $list;
        $this->position = count($list);
    }

    public function current()
    {

    }

    public function next()
    {

    }

    public function key()
    {

    }

    public function valid()
    {

    }

    public function rewind()
    {

    }

    public function remove()
    {
        if ($this->position <= 0) {
            throw new \Exception("You can't remove an item until you 've done at least one next()");
        }

        if ($this->list[$this->position - 1] != null) {
            for ($i = $this->position - 1; $i < count($this->list) - 1; $i++) {
                $this->list[$i] = $this->list[$i + 1];
            }
            $this->list[count($this->list) - 1] = null;
        }
    }
}
