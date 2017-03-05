<?php
namespace Decorator\SecondExample;

class MainProcess extends ProcessRequest
{
    public function process(RequestHelper $requestHelper)
    {
        echo __CLASS__ . ": doing something useful with request.\n";
    }
}