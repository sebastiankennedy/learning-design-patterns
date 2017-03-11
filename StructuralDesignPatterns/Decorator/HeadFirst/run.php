<?php
// 自动注册
spl_autoload_register('autoload');

function autoload($class)
{
    require "../../../" . str_replace('\\', '/', $class) . '.php';
}

use StructuralDesignPatterns\Decorator\HeadFirst\{
    DarkRoast,
    Decaf,
    Espresso,
    HouseBLend,
    Milk,
    Mocha,
    Soy,
    Whip
};


$darkRoast = new DarkRoast();
$darkRoast = new Soy($darkRoast);
$darkRoast = new Milk($darkRoast);

$espresso = new Espresso();
$espresso = new Whip($espresso);
$espresso = new Mocha($espresso);

$decaf = new Decaf();
$decaf = new Soy($decaf);
$decaf = new Whip($decaf);
$decaf = new Milk($decaf);
$decaf = new Mocha($decaf);

echo sprintf("%s, it will cost $%1.2f.\n", $darkRoast->getDescription(), $darkRoast->cost());
echo sprintf("%s, it will cost $%1.2f.\n", $espresso->getDescription(), $espresso->cost());
echo sprintf("%s, it will cost $%1.2f.\n", $decaf->getDescription(), $decaf->cost());