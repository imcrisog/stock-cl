<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StockStoreFormRequest;
use App\Models\Stock;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StockController extends Controller
{
    public function index() 
    {
        $stocks = Stock::all();

        return view('Stock.index', compact('stocks'));
    }

    public function create()
    {
        return View('Stock.create');
    }

    public function store(StockStoreFormRequest $request) 
    {
        Stock::create($request->validated());

        return redirect()->route('stocks.index');
    }

    public function show(Stock $stock) 
    {
        return view('Stock.show', compact('stock'));
    }

    public function edit(Stock $stock) 
    {
        return view('Stock.edit', compact('stock'));
    }

    public function update(Request $request, Stock $stock) 
    {
        if (!isset($stock)) return back()->withErrors('Stock no encontrado');
        
        $request->only([
            'name' => 'string',
            'quantity' => 'integer',
            'price' => 'numeric',
            'from' => 'string',
        ]);
        
        $editStock = $request->all();

        $stock->update($editStock);

        return redirect()->route('stocks.show', $stock->id);
    }

    public function destroy(Stock $stock) 
    {
        $stock->delete();

        return redirect()->route('stocks.index');
    }
    

    public function plugin_rest(Stock $stock) 
    {
        $stock->quantity -= 1;
        $stock->save();

        return response()->json(['success' => true])->status(Response::HTTP_ACCEPTED);
    }
}
