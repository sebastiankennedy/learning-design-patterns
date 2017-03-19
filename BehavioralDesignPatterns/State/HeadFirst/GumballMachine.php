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

    protected $soldState;
    protected $soldOutState;
    protected $noQuarterState;
    protected $hasQuarterState;

    public function __construct(int $numberGumballs)
    {
        $this->soldState = new SoldState($this);
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
}

