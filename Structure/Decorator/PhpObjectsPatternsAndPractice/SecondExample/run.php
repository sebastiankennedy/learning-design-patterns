<?php
// 自动注册
spl_autoload_register('autoload');

function autoload($class)
{
    require "../../../../" . str_replace('\\', '/', $class) . '.php';
}

use StructuralDesignPatterns\Decorator\PhpObjectsPatternsAndPractice\SecondExample\{AuthenticateRequest,
    LogRequest,
    MainProcess,
    RequestHelper,
    StructureRequest};

$process = new AuthenticateRequest(new StructureRequest(new LogRequest(new MainProcess())));
$process->process(new RequestHelper());