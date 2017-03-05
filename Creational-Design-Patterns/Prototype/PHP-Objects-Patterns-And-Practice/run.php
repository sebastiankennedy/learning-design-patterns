<?php
// 自动加载
spl_autoload_register('autoload');

function autoload($class)
{
    require '../../' . str_replace('\\', '/', $class) . '.php';
}

use Prototype\FirstExample\TerrainFactory;
use Prototype\FirstExample\EarthSea;
use Prototype\FirstExample\EarthForest;
use Prototype\FirstExample\EarthPlains;
use Prototype\FirstExample\MarsSea;
use Prototype\FirstExample\MarsForest;
use Prototype\FirstExample\MarsPlains;

$marsFactory = new TerrainFactory(new MarsSea(), new MarsForest(), new MarsPlains());
$earthFactory = new TerrainFactory(new EarthSea(), new EarthForest(), new EarthPlains());
$mixedFactory = new TerrainFactory(new EarthSea(), new EarthForest(), new MarsPlains());
var_dump($marsFactory->getSea());
var_dump($marsFactory->getForest());
var_dump($marsFactory->getPlains());
var_dump($earthFactory->getSea());
var_dump($earthFactory->getForest());
var_dump($earthFactory->getPlains());
var_dump($mixedFactory->getSea());
var_dump($mixedFactory->getForest());
var_dump($mixedFactory->getPlains());