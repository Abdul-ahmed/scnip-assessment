<?php

namespace App\Handlers\Sorters;

class PriceSorter implements Sorter
{
    public function sort($products)
    {
        usort($products, function ($a, $b) {
            return $a['price'] <=> $b['price'];
        });
        return $products;
    }
}
