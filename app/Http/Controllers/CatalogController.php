<?php

namespace App\Http\Controllers;

use App\Handlers\Sorters\PriceSorter;
use App\Handlers\Sorters\SalesPerViewSorter;
use App\Handlers\Sorters\Sorter\Catalog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CatalogController extends Controller
{

    protected $catalog;

    public function __construct()
    {
        $this->catalog = new Catalog($this->getProductsFromRequest());
    }

    public function sortByPrice(PriceSorter $productPriceSorter)
    {
        $sortedProducts = $this->catalog->getProducts($productPriceSorter);
        return $this->successResponse('Products sorted by price', $sortedProducts, Response::HTTP_OK);
    }

    public function sortBySalesPerView(SalesPerViewSorter $productSalesPerViewSorter)
    {
        $sortedProducts = $this->catalog->getProducts($productSalesPerViewSorter);
        return $this->successResponse('Products sorted by sales per view', $sortedProducts, Response::HTTP_OK);
    }

    public function getProductsFromRequest()
    {
        // return Product::all();
        return [
            [
                'id' => 1,
                'name' => 'Alabaster Table',
                'price' => 12.99,
                'created' => '2019-01-04',
                'sales_count' => 32,
                'views_count' => 730,
            ],
            [
                'id' => 2,
                'name' => 'Zebra Table',
                'price' => 44.49,
                'created' => '2012-01-04',
                'sales_count' => 301,
                'views_count' => 3279,
            ],
            [
                'id' => 3,
                'name' => 'Coffee Table',
                'price' => 10.00,
                'created' => '2014-05-28',
                'sales_count' => 1048,
                'views_count' => 20123,
            ]
        ];
    }
}
