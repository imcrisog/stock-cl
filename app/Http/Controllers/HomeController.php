<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function index()
    {
        return View('index', [
            'title' => 'StockCL',
        ]);
    }

    public function home()
    {
        return View('home', [
            'title' => 'Home',
            'user' => auth()->user()
        ]);
    }

    public function register(Request $req) // remove in production
    {
        return View('Auth.register', [
            'title' => 'Register'
        ]);
    }
    
    public function storeregister(Request $req) // remove in production
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        $user->save();
        Auth::login($user);

        return redirect()->route('home');
    }

    public function login()
    { 
        return View('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function storelogin(Request $request): RedirectResponse
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
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }
    
        return back()->withErrors([
            'name' => 'Invalid name or password',
            'password' => 'Invalid name or password'
        ]);
    }
    
    public function logout(Request $req): RedirectResponse
    {
        auth()->logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();
        
        return redirect()->route('auth.login.show');
    }

}
