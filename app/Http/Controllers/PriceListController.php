<?php

namespace App\Http\Controllers;

use App\ListPrice;
use Illuminate\Http\Request;

class PriceListController extends Controller
{
    public function __invoke()
    {

        $listPrices = ListPrice::query()->get();

       return view('price-list', compact('listPrices'));
    }
}
