<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'StockCL',
        ]);
    }

    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'user' => auth()->user()
        ]);
    }

    public function login()
    { 
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function storelogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $findUser = User::where('email', $request->email)->first();
        
        if (!$findUser) return back()->withErrors([
            'name' => 'User does not exist',
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password]) == false) {
            return back()->withErrors([
                'name' => 'Invalid name',
                'password' => 'Invalid password'
            ]);
        }
    
        return redirect()->route('home');
    }
    
    public function logout(Request $request): RedirectResponse
    {
        auth()->logout();
        
        return redirect()->route('auth.login.show');
    }

}
