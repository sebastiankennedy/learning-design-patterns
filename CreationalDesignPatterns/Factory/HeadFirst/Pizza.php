<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

abstract class Pizza
{
    public $name;
    public $dough;
    public $sauce;
    public $toppings = [];

    public function prepare() : void
    {
        printf("Preparing " . $this->name . "\n");
        printf("Tossing dough...\n");
        printf("Adding sauce...\n");
        printf("Adding toppings: ");
        foreach ($this->toppings as $topping) {
            printf("  " . $topping);
        }
        printf("\n");
    }

    public function bake() : void
    {
        printf("Bake for minutes at 350\n");
    }

    public function cut() : void
    {
        printf("Cutting the pizza into diagnoal slices\n");
    }

    public function box()
    {
        printf("Place pizza in official PizzaStore box\n");
    }

    public function getName()
    {
        return $this->name;
    }
}
