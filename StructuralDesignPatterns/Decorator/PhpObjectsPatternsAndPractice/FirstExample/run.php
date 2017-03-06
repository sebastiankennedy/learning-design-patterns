<?php
// 自动注册
spl_autoload_register('autoload');

function autoload($class)
{
    require "../../" . str_replace('\\', '/', $class) . '.php';
}

use Decorator\FirstExample\Plains;
use Decorator\FirstExample\DiamondDecorator;
use Decorator\FirstExample\PollutedDecorator;


$tile = new Plains();
echo $tile->getWealthFactor() . "\n";

$tile = new DiamondDecorator(new Plains());
echo $tile->getWealthFactor() . "\n";

$tile = new PollutedDecorator(new DiamondDecorator(new Plains()));
echo $tile->getWealthFactor() . "\n";