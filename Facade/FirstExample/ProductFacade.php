<?php
namespace Facade\FirstExample;

use Facade\FirstExample\Product;

class ProductFacade
{
    private $products = [];

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getProduct($id)
    {
        return $this->products[$id];
    }

    private function compile()
    {
        $lines = getProductFileLines($this->file);
        foreach ($lines as $line) {
            $id = getIdFromLine($line);
            $name = getNameFromLine($line);
            $this->products[$id] = getProductObjectFromId($id, $name);
        }
    }
}