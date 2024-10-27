<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index()
    {
        return View('index');
    }

    public function login()
    {
        return View('Auth.login', [
            'title' => 'Login'
        ]);
    }

    public function storelogin(Request $request)
    {
        $credentials = $request->only('name', 'password');
        $credentials['password'] = bcrypt($credentials['password']);

        $findUser = User::where('name', '=', $request->name)->first();
        
        if (!$findUser) return back()->withErrors([
            'name' => 'User does not exist',
        ]);
        
        if (!(Auth::attempt($credentials))) return back()->withErrors([
            'name' => 'Invalid name or password',
            'password' => 'Invalid name or password'
        ]);
        
        return redirect()->route('index');
    }
}
