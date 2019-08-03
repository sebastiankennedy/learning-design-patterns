<?php
namespace Strategy\FirstExample;

abstract class Duck
{
    public $flyBehavior;
    public $quackBehavior;

    public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    abstract public function display();

    public function performQuack()
    {
        return $this->flyBehavior->fly();
    }

    public function performFly()
    {
        return $this->quackBehavior->quack();
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

}
