<?php
namespace BehavioralDesignPatterns\Observer\PhpObjectsPatternsAndPractice\FirstExample;

class PartnershipTool extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        echo __CLASS__ . ": \t set cookie if IP matches a list\n";
    }
}
