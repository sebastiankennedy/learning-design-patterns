<?php
namespace Facade\FirstExample;

class Product
{
    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

function getProductFileLines($file)
{
    return file($file);
}

function getProductObjectFromId($id, $productName)
{
    return new Product($id, $productName);
}

function getNameFromLine($line)
{
    return $line . 'Hello';
}

function getIdFromLine($line)
{
    return $line . 'World';
}