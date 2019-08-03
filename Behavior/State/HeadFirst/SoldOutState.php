<?php
namespace BehavioralDesignPatterns\State\HeadFirst;

class SoldOutState implements State
{
    public $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter() : void
    {
        echo "You can't insert a quarter, the machine is sold out.\n";
    }

    public function ejectQuarter() : void
    {
        echo "You can't eject,you haven't inserted a quarter yet.\n";
    }

    public function tumCrank() : void
    {
        echo "You turned, but there are no gumballs.\n";
    }

    public function dispense() : void
    {
        echo "No gumball dispensed.\n";
    }
}