<?php
namespace Observer\SecondExample;

class PartnershipTool extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        echo __CLASS__ . " : set cookie if IP matches a list\n";
    }
}
