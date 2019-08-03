<?php
namespace BehavioralDesignPatterns\TemplateMethod\HeadFirst;

class Tea extends CaffeineBeverage
{
    public function brew() : void
    {
        echo "Steeping the tea.\n";
    }

    public function addCondiments() : void
    {
        echo "Adding Lemon.\n";
    }
}