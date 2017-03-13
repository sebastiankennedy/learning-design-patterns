<?php
namespace BehavioralDesignPatterns\TemplateMethod\HeadFirst;

class Coffee extends CaffeineBeverage
{
    public function brew() : void
    {
        echo "Dripping Coffee through filter.\n";
    }

    public function addCondiments() : void
    {
        echo "Adding Sugar and Milk.\n";
    }
}