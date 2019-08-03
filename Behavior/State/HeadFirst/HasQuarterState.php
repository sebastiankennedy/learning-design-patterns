<?php
namespace BehavioralDesignPatterns\State\HeadFirst;

class HasQuarterState implements State
{
    public $gumballMachine;
    protected $randomWinner;

    public function __construct(GumballMachine $gumballMachine)
    {

        $this->randomWinner = range(1, 20);
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
        echo "You turned..\n";
        $randNum = $this->randomWinner[array_rand($this->randomWinner)] % 10;
        if ($randNum == 0 && $this->gumballMachine->getCount()) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense() : void
    {
        echo "No gumball dispensed.\n";
    }
}