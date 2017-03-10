<?php
namespace CreationalDesignPatterns\AbstractFactory\HeadFirst;

abstract class Pizza
{
    public $name;
    public $dough;
    public $sauce;
    public $veggie;
    public $cheese;
    public $pepperoni;
    public $clam;

    abstract public function prepare() : void;

    public function bake() : void
    {
        printf("Bake for minutes at 350\n");
    }

    public function cut() : void
    {
        printf("Cutting the pizza into diagnoal slices\n");
    }

    public function box() : void
    {
        printf("Place pizza in official PizzaStore box\n");
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName($value) : void
    {
        $this->name = $value;
    }
}
