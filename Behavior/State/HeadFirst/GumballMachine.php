<?php
namespace BehavioralDesignPatterns\State\HeadFirst;

class GumballMachine
{
    // 追踪实例的状态
    protected $count = 0;
    protected $soldState;
    protected $winnerState;
    protected $soldOutState;
    protected $noQuarterState;
    protected $hasQuarterState;

    public function __construct(int $numberGumballs)
    {
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);

        $this->count = $numberGumballs;
        if ($this->count > 0) {
            $this->state = $this->noQuarterState;
        }
    }

    public function setState(State $state) : void
    {
        $this->state = $state;
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->tumCrank();
        $this->state->dispense();
    }

    public function releaseBall()
    {
        echo "A gumball comes rolling out the slot...\n";
        if ($this->count != 0) {
            $this->count--;
        }
    }

    public function getSoldState()
    {
        return $this->soldState;
    }

    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    public function getWinnerState()
    {
        return $this->winnerState;
    }

    public function __toString()
    {
        $string = "Mighty Gumball, Inc.\n";
        $string .= "PHP-enabled Standing Gumball Model #2017.\n";
        $string .= "Inventory: " . $this->getCount() . ".\n";
        $string .= "Machine is waiting for quarter.\n";
        return $string;
    }

    public function getCount()
    {
        return $this->count;
    }
}

