<?php
namespace BehavioralDesignPatterns\TemplateMethod\HeadFirst;

abstract class CaffeineBeverage
{
    final public function prepareRecipe() : void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    public function boilWater() : void
    {
        echo "Boiling water.\n";
    }

    abstract public function brew() : void;

    public function pourInCup()
    {
        echo "Pouring into Cup.\n";
    }

    abstract public function addCondiments() : void;
}
