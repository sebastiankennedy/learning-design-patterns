<?php
namespace BehavioralDesignPatterns\TemplateMethod\HeadFirst;

abstract class CaffeineBeverageWithHook
{
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
    }

    public function boilWater() : void
    {
        echo "Boiling water.\n";
    }

    abstract public function brew() : void;

    public function pourInCup() : void
    {
        echo "Pouring into cup.\n";
    }

    public function customerWantsCondiments() : bool
    {
        return true;
    }

    abstract public function addCondiments() : void;
}

