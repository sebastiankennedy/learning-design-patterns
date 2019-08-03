<?php
namespace BehavioralDesignPatterns\Iterator\HeadFirst\SecondExample;

class MenuItem
{
    public $name;
    public $description;
    public $vegetarian;
    public $price;

    public function __construct(string $name, string $description, bool $vegetarian, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function getVegetarian() : bool
    {
        return $this->vegetarian;
    }
}


