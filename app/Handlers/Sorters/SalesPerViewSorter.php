<?php

namespace App\Handlers\Sorters;

class SalesPerViewSorter implements Sorter
{
    public function sort($products)
    {
        usort($products, function ($a, $b) {
            return ($a['sales_count'] / $a['views_count']) <=> ($b['sales_count'] / $b['views_count']);
        });
        return $products;
    }
}
