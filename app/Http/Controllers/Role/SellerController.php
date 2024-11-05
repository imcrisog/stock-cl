<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SellerController extends Controller
{
    public function home(User $user) 
    {
        return redirect()->route('home', compact('user'));
    }
}