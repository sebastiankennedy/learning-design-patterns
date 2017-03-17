<?php
namespace BehavioralDesignPatterns\State\HeadFirst;

class HasQuarterState implements State
{
    public $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter() : void
    {
        echo "You can't insert another quarter.\n";
    }

    public function ejectQuarter() : void
    {
        echo "Quarter returned.\n";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function tumCrank() : void
    {
        echo "You turned..";
        $this->gumballMachine->setState($this->gumballMachine->getSoldState());
    }

    public function dispense() : void
    {
        echo "No gumball dispensed.\n";
    }
}