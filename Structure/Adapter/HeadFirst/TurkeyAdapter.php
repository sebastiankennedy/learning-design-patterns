<?php
namespace StructuralDesignPatterns\Adapter\HeadFirst;

class TurkeyAdapter implements Duck
{
    public $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack() : void
    {
        $this->turkey->gobble();
    }

    public function fly() : void
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
