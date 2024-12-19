<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\AuthenticateUser;
use App\Http\Middleware\Secretaryware;
use App\Http\Requests\StockStoreFormRequest;
use App\Models\Stock;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Routing\Controllers\Middleware;

class StockController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware(AuthenticateUser::class),
            new Middleware(Secretaryware::class, except: ['index']),
        ];
    }

    public function index(Request $request)
    {
        $stocks = Stock::simplePaginate($request->perPage ?? session()->get('perPage', 5));
        
        if (isset($request->perPage)) session()->put('perPage', $request->perPage);
        
        $user = auth()->user();
        $role = auth()->user()->role;
        $stock = $stocks->first();
        $allStocks = Stock::get();

        $allWidthsAvailable = $allStocks->pluck('ANCHO')->unique();
        $allHeightsAvailable = $allStocks->pluck('PERFIL')->unique();
        $allRimsAvailable = $allStocks->pluck('ARO')->unique();

        $findStock = null;
        if ($request->has('search')) $findStock = $this->doSearchIndex($request->search);

        $stocksColumns = array_filter($stock->getFillable(), function ($elem) {
            return in_array($elem, ['CODIGO', 'MARCA', 'MODELO', 'ANCHO', 'PERFIL', 'E', 'ARO','TIPO', 'TELAS', 'I_C', 'I_V', 'FAB', 'P_DIST', 'MBV', 'PRECIO_LISTA', 'STOCK_R', 'STOCK_O', 'DOT', 'OE', 'T']);
        });
        
        // Not viable
        if ($role->id <= 2) {
            $stocksColumns = $stock->getFillable();
        }

        return empty ($findStock) ? view('Stock.index', compact('stocks', 'user', 'role', 'stocksColumns', 'allWidthsAvailable', 'allHeightsAvailable', 'allRimsAvailable')) : view('Stock.index', compact('stocks', 'user', 'role', 'stocksColumns', 'findStock', 'allWidthsAvailable', 'allHeightsAvailable', 'allRimsAvailable'));
    }

    public function doSearchIndex($search)
    {
        $search = strtoupper($search);

        if ($search == '') return Stock::paginate($request->perPage ?? session()->get('perPage', 5));
        $mergedResults = new Collection();

        $splittedSearch = str_split($search, 2);

        $specificSearch = Stock::whereAny(['ANCHO', 'PERFIL', 'ARO'],'LIKE', '%'.$splittedSearch[0].'%')->get();
        $generalSearch =  Stock::whereAny(['ANCHO', 'PERFIL', 'ARO'],'LIKE', '%'.$search.'%')->get();
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
        
        $editStock = $request->validate(
            [
                'CODIGO' => 'nullable|string|unique:stocks,CODIGO',
                'MARCA' => 'nullable|string',
                'MODELO' => 'nullable|string',
                'DOT' => 'nullable|date',
                'OE' => 'nullable|string',
                'ANCHO' => 'nullable|numeric|min:0.1',
                'PERFIL' => 'nullable|string',
                'E' => 'nullable|string',
                'ARO' => 'nullable|string',
                'TIPO' => 'nullable|string',
                'TELAS' => 'nullable|string',
                'I_C' => 'nullable|string',
                'I_V' => 'nullable|string',
                'FAB' => 'nullable|string',
                'C_C_IVA' => 'nullable|numeric|min:0',
                'C_NETO' => 'nullable|string',
                'PCP' => 'nullable|numeric|min:0',
                'PPP' => 'nullable|numeric|min:0',
                'PPS' => 'nullable|numeric|min:0',
                'PL' => 'nullable|numeric|min:0',
                'FLETE' => 'nullable|numeric|min:0',
                'C_P' => 'nullable|numeric|min:0',
                'P_DIST' => 'nullable|numeric|min:0',
                'MBV' => 'nullable|numeric|min:0',
                'PRECIO_LISTA' => 'nullable|numeric|min:0',
                'PROVEEDOR' => 'nullable|string',
                'STOCK_R' => 'nullable|string',
                'STOCK_O' => 'nullable|string',
                'V_TR' => 'nullable|string',
                'V_TO' => 'nullable|string',
                'TOTALES' => 'nullable|string',
                'T' => 'nullable|numeric',
            ]
        );

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
