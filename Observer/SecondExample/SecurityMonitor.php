<?php
namespace Observer\SecondExample;

class SecurityMonitor extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        echo __CLASS__ . " : sending mail to sysadmin\n";
    }
}
