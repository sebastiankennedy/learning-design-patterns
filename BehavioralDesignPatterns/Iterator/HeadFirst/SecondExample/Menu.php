<?php
namespace BehavioralDesignPatterns\Iterator\HeadFirst\SecondExample;

use Iterator;

interface Menu
{
    public function createIterator() : Iterator;
}
