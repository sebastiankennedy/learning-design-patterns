<?php
namespace BehavioralDesignPatterns\Observer\PhpObjectsPatternsAndPractice\FirstExample;

class GeneralLogger extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        echo __CLASS__ . ": \t add login data to log.\n";
    }
}
