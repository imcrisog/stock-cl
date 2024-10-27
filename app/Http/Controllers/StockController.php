<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index() 
    {
        $stocks = Stock::all();

        return view('Stocks.index', compact('stocks'));
    }

    public function store() 
    {
        
    }

    public function plugin_store() {}
}
