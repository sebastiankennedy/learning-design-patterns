<?php
namespace BehavioralDesignPatterns\State\HeadFirst;

interface State
{
    public function insertQuarter();

    public function ejectQuarter();

    public function tumCrank();

    public function dispense();
}
