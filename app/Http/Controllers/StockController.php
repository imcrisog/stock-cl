<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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

    public function plugin_rest(Stock $stock) 
    {
        $stock->quantity -= 1;
        $stock->save();

        return response()->json(['success' => true])->status(Response::HTTP_ACCEPTED);
    }
}
