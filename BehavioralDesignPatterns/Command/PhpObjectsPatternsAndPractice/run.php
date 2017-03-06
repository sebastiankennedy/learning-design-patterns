<?php
// 自动加载
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../../' . str_replace('\\', '/', $class) . '.php';
}

use BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice\Controller;

$controller = new Controller();
$context = $controller->getContext();
$context->addParam('action', 'login');
$context->addParam('username', 'Red Queen');
$context->addParam('password', '123456');
$controller->process();


$context->addParam('action', 'send');
$context->addParam('email', 'LuisEdward@qq.com');
$context->addParam('message', 'Hello Command Pattern');
$context->addParam('topic', 'Design Patterns');
$controller->process();