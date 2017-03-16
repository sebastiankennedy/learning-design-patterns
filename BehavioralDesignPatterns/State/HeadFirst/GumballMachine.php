<?php
namespace BehavioralDesignPatterns\State\HeadFirst;

class GumballMachine
{
    // 状态
    const SOLD_OUT = 0;
    const NO_QUARTER = 1;
    const HAS_QUARTER = 2;
    const SOLD = 3;

    // 追踪实例的状态
    public $state = self::SOLD_OUT;
    public $count = 0;

    public $soldState;
    public $soldOutState;
    public $noQuarterState;
    public $hasQuarterState;

    public function __construct(int $numberGumballs)
    {
        $this->soldState = new SoldState($this);
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);

        $this->count = $numberGumballs;
        if ($numberGumballs > 0) {
            $this->state = $this->noQuarterState;
        }
    }

    public function setState(State $state) : void
    {
        $this->state = $state;
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

    /*public function insertQuarter() : void
    {
        if ($this->state == self::HAS_QUARTER) {
            echo "You can't insert another quarter.\n";
        } elseif ($this->state == self::NO_QUARTER) {
            $this->state = self::HAS_QUARTER;
            echo "You inserted a quarter.\n";
        } elseif ($this->state == self::SOLD_OUT) {
            echo "You can't insert a quarter, the machine is sold out.\n";
        } elseif ($this->state == self::SOLD) {
            echo "Please wait, we're already giving you a gumball.\n";
        }
    }

    public function ejectQuarter()
    {
        if ($this->state == self::HAS_QUARTER) {
            echo "Quarter returned.\n";
        } elseif ($this->state == self::NO_QUARTER) {
            echo "You haven't inserted a quarter.\n";
        } elseif ($this->state == self::SOLD) {
            echo "Sorry, you already turned the crank.\n";
        } elseif ($this->state == self::SOLD_OUT) {
            echo "You can't eject,you haven't inserted a quarter yet.\n";
        }
    }

    public function turnCrank()
    {
        if ($this->state == self::SOLD) {
            echo "Turning twice doesn't get you another gumball!.\n";
        } elseif ($this->state == self::NO_QUARTER) {
            echo "You turned, but there 's no quarter.\n";
        } elseif ($this->state == self::SOLD_OUT) {
            echo "You turned, but there are no gumballs.\n";
        } elseif ($this->state == self::HAS_QUARTER) {
            echo "You turned..";
            $this->state = self::SOLD;
            $this->dispense();
        }
    }

    public function dispense()
    {
        if ($this->state == self::SOLD) {
            echo "A gumball comes rolling out the slot.\n";
            $this->count--;
            if ($this->count == 0) {
                echo "Oops, out of gumballs!\n";
                $this->state = self::SOLD_OUT;
            } else {
                $this->state = self::NO_QUARTER;
            }
        } elseif ($this->state == self::NO_QUARTER) {
            echo "You need to pay first.\n";
        } elseif ($this->state == self::SOLD_OUT) {
            echo "No gumball dispensed.\n";
        } elseif ($this->state == self::HAS_QUARTER) {
            echo "No gumball dispensed.\n";
        }
    }*/
}

