<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StockStoreFormRequest;
use App\Models\Stock;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StockController extends Controller
{
    public function index(Request $request)
    {
        $stocks = Stock::paginate($request->perPage ?? session()->get('perPage', 5));
        
        if (isset($request->perPage)) session()->put('perPage', $request->perPage);
        
        $user = auth()->user();
        $role = auth()->user()->role;
        $stock = $stocks->first();

        $findStock = null;
        if ($request->has('search')) $findStock = $this->doSearchIndex($request->search);
        
        $stocksColumns = array_filter($stock->getFillable(), function ($elem) {
            return in_array($elem, ['CODIGO', 'MARCA', 'MODELO', 'ANCHO', 'PERFIL', 'E', 'ARO','STOCK O.', 'STOCK R.', 'PRECIO LISTA', 'PROVEEDOR']);
        });

        return empty ($findStock) ? view('Stock.index', compact('stocks', 'user', 'role', 'stocksColumns')) : view('Stock.index', compact('stocks', 'user', 'role', 'stocksColumns', 'findStock'));
    }

    public function doSearchIndex($search)
    {
        $search = strtoupper($search);

        if ($search == '') return Stock::paginate($request->perPage ?? session()->get('perPage', 5));
        $mergedResults = new Collection();

        $splittedSearch = str_split($search, 2);

        $specificSearch = Stock::whereAny(['ANCHO', 'PERFIL', 'ARO'],'LIKE', '%'.$splittedSearch[0].'%')->get();
        $generalSearch =  Stock::whereAny(['ANCHO', 'PERFIL', 'E', 'ARO'],'LIKE', '%'.$search.'%')->get();
        $deepSearch = Stock::whereAny(['ANCHO', 'PERFIL', 'ARO'],'LIKE', '%'.$splittedSearch[count($splittedSearch)-1].'%')->get();

        $mergedResults = $generalSearch->merge($specificSearch);
        $mergedResults->merge($deepSearch);

        return $mergedResults;
    }

    public function create(Stock $stock)
    {
        $user = auth()->user();
        $role = auth()->user()->role;
        $stocksColumns = $stock->getFillable();

        return view('Stock.create', compact('user', 'stocksColumns', 'role'));
    }

    public function store(StockStoreFormRequest $request) 
    {
        $findDuplicate = Stock::where('CODIGO', $request->input('CODIGO'))->first();
        
        if($findDuplicate) return back()->withErrors(['CODIGO' => 'El stock ya existe']);


        $stock = Stock::create($request->all()); // Should be validated

        return redirect()->route('stocks.show', $stock->CODIGO);
    }

    public function show(Stock $stock) 
    {
        $user = auth()->user();
        $role = auth()->user()->role;
        $stocksColumns = $stock->getFillable();

        return view('Stock.show', compact('stock', 'stocksColumns', 'user', 'role'));
    }

    public function edit(Stock $stock) 
    {
        $stocksColumns = $stock->getFillable();
        $user = auth()->user();
        $role = auth()->user()->role;
        
        return view('Stock.edit', compact('stock', 'stocksColumns', 'user', 'role'));
    }

    public function update(Request $request, Stock $stock) 
    {
        if (!$stock) return back()->withErrors('Stock no encontrado');
        
        $editStock = $request->all();

        $stock->update(array_filter($editStock));

        return redirect()->route('stocks.show', $stock->CODIGO);
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
