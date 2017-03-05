<?php
namespace Observer\SecondExample;

class GeneralLogger extends LoginObserver
{
    public function doUpdate(Login $login)
    {
        echo __CLASS__ . " : add login data to log.\n";
    }
}
