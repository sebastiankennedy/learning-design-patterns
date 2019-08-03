<?php
namespace BehavioralDesignPatterns\TemplateMethod\HeadFirst;

class CoffeeWithHook extends CaffeineBeverageWithHook
{
    public function brew() : void
    {
        echo "Dripping Coffee through filter";
    }

    public function addCondiments() : void
    {
        echo "Adding Sugar and Milk";
    }

    public function customerWantsCondiments() : bool
    {
        // 模拟用户输入
        $answer = "Yes";
        if ($answer === 'Yes') {
            return true;
        } else {
            return false;
        }
    }
}
