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
        echo "You inserted a quarter.\n";
    }

    public function ejectQuarter() : void
    {
        echo "Quarter returned.\n";
    }

    public function tumCrank() : void
    {
        echo "You turned..";
        $this->gumballMachine->state = gumballMachine::SOLD;
    }

    public function dispense() : void
    {
        echo "A gumball comes rolling out the slot.\n";
        $this->gumballMachine->count--;
        if ($this->gumballMachine->count == 0) {
            echo "Oops, out of gumballs!\n";
            $this->gumballMachine->state = gumballMachine::SOLD_OUT;
        } else {
            $this->gumballMachine->state = gumballMachine::NO_QUARTER;
        }
    }
}