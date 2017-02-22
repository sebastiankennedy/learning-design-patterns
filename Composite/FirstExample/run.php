<?php
// 自动注册
spl_autoload_register('autoload');

function autoload($class)
{
    require "../../" . str_replace('\\', '/', $class) . '.php';
}

use Composite\Example\Army;
use Composite\Example\Archer;
use Composite\Example\LaserCanon;

// 创建一个 Army 对象
$mainArmy = new Army();

// 添加一些 Unit 对象
$mainArmy->addUnit(new Archer());
$mainArmy->addUnit(new LaserCanon());

// 创建一个新的 Army 对象
$subArmy = new Army();

// 添加一些 Unit 对象
$subArmy->addUnit(new Archer());
$subArmy->addUnit(new Archer());
$subArmy->addUnit(new Archer());