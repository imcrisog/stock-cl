<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return View('index');
    }

    public function home()
    {
        return View('home', [
            'title' => 'Home',
        ]);
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
        
        $findUser = User::where('name', '=', $request->name)->first();
        
        if (!$findUser) return back()->withErrors([
            'name' => 'User does not exist',
        ]);

        if (Auth::attempt($credentials, isset($request->remember))) {
            cookie('name', $request->name, 60, '/', 'http://localhost/stock-cl');
            return redirect()->route('home');
        }
    
        return back()->withErrors([
            'name' => 'Invalid name or password',
            'password' => 'Invalid name or password'
        ]);
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
