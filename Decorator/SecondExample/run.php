<?php
// 自动注册
spl_autoload_register('autoload');

function autoload($class)
{
    require "../../" . str_replace('\\', '/', $class) . '.php';
}

use Decorator\SecondExample\MainProcess;
use Decorator\SecondExample\LogRequest;
use Decorator\SecondExample\StructureRequest;
use Decorator\SecondExample\AuthenticateRequest;
use Decorator\SecondExample\RequestHelper;

$process = new AuthenticateRequest(new StructureRequest(new LogRequest(new MainProcess())));
$process->process(new RequestHelper());