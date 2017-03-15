<?php
namespace BehavioralDesignPatterns\Iterator\HeadFirst\FirstExample;

interface Iterator
{
    public function hasNext() : bool;

    public function next() : MenuItem;
}
