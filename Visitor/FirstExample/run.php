<?php
// 自动注册
spl_autoload_register('autoload');

function autoload($class)
{
    require "../../" . str_replace('\\', '/', $class) . '.php';
}

