<?php
namespace BehavioralDesignPatterns\State\HeadFirst;

class SoldState implements State
{
    public $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter() : void
    {
        echo "Please wait, we're already giving you a gumball.\n";
    }

    public function ejectQuarter() : void
    {
        echo "Sorry, you already turned the crank.\n";
    }

    public function tumCrank() : void
    {
        echo "Turning twice doesn't get you another gumball!.\n";
    }

    public function dispense() : void
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo "Oops, out of gumballs!\n";
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }
}