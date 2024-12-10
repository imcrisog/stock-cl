<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends StockController
{
    public function index(Request $request)
    {   
        $stocksColumns = array_filter($stock->getFillable(), function ($elem) {
            return in_array($elem, ['CODIGO', 'MARCA', 'MODELO']);
        });

        return $stocksColumns;
    }
}