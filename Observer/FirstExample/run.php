<?php
// 自动加载
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../' . str_replace('\\', '/', $class) . '.php';
}

use Observer\FirstExample\Login;
use Observer\FirstExample\SecurityMonitor;
use Observer\FirstExample\GeneralLogger;
use Observer\FirstExample\PartnershipTool;

$login = new Login();
$login->attach(new SecurityMonitor());
$login->handleLogin();

new GeneralLogger($login);
new PartnershipTool($login);

$login->handleLogin();
