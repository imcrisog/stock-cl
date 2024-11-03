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

        return view('Stock.index', compact('stocks'));
    }

    public function create()
    {
        return View('Stock.create');
    }

    public function store(Request $req, Stock $stock) 
    {
        $req->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'from' => 'required',
        ]);

        $stock = Stock::create($req->all());

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

    public function update(Request $req, Stock $stock) 
    {
        $findStock = $stock::where('id', '=', $stock->id);
        if (!isset($findStock)) return back()->withErrors('Stock no encontrado');

        $req->validate([
            'name' => 'string' || $findStock->name,
            'quantity' => 'integer' || $findStock->quantity,
            'price' => 'numeric' || $findStock->price,
            'from' => 'string' || $findStock->from,
            'updated_at' => 'timestamp',
        ]);

        $stock->update($req->all());

        return redirect()->route('stocks.index');
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
