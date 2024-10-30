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
        return dd(auth()->check());
        return View('home', [
            'title' => 'Home',
            'user' => auth()->user()
        ]);
    }

    public function login()
    {
        return View('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function storelogin(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        
        $findUser = User::where('name', '=', $request->name)->first();
        
        if (!$findUser) return back()->withErrors([
            'name' => 'User does not exist',
        ]);

        if (auth()->attempt($credentials, isset($request->remember))) {
            return redirect()->route('home');
        }
    
        return back()->withErrors([
            'name' => 'Invalid name or password',
            'password' => 'Invalid name or password'
        ]);
    }
    
    public function logout(Request $req)
    {
        auth()->logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();
        
        return redirect()->route('auth.login.show');
    }

}
