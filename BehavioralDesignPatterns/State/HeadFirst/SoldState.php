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
        echo "A gumball comes rolling out the slot.\n";
    }
}