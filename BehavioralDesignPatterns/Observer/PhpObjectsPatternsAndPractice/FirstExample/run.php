<?php
// 自动加载
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../../../' . str_replace('\\', '/', $class) . '.php';
}

use BehavioralDesignPatterns\Observer\PhpObjectsPatternsAndPractice\FirstExample\{
    Login, SecurityMonitor, GeneralLogger, PartnershipTool
};

$login = new Login();
$login->attach(new SecurityMonitor());
$login->handleLogin();

new GeneralLogger($login);
new PartnershipTool($login);

$login->handleLogin();
