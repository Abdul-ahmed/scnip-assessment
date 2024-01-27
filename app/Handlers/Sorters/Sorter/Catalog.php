<?php

namespace App\Handlers\Sorters\Sorter;

use App\Handlers\Sorters\Sorter;

class Catalog
{
    protected $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function getProducts(Sorter $sorter)
    {
        return $sorter->sort($this->products);
    }
}
