<?php
// 注册自动加载
spl_autoload_register('autoload');
function autoload($class)
{
    require '../../' . str_replace('\\', '/', $class) . '.php';
}

use Strategy\FirstExample\FlyNoWay;
use Strategy\FirstExample\FlyWithWings;
use Strategy\FirstExample\MallardDuck;
use Strategy\FirstExample\MuteQuack;
use Strategy\FirstExample\Quack;
use Strategy\FirstExample\RedheadDuck;
use Strategy\FirstExample\RubberDuck;
use Strategy\FirstExample\Squeak;

$flyWithWings = new FlyWithWings();
$quack = new Quack();
$mallardDuck = new MallardDuck($flyWithWings, $quack);
echo $mallardDuck->performFly();
echo $mallardDuck->performQuack() . "\n";

$flyNoWay = new FlyNoWay();
$muteQuack = new MuteQuack();
$rubberDuck = new RubberDuck($flyNoWay, $muteQuack);
echo $rubberDuck->performFly();
echo $rubberDuck->performQuack() . "\n";

$redheadDuck = new RedheadDuck($flyWithWings, $quack);
$redheadDuck->setQuackBehavior(new Squeak());
echo $redheadDuck->performFly();
echo $redheadDuck->performQuack() . "\n";