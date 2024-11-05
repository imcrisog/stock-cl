<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function settings(Request $req) 
    {
        $user = auth()->user();
        return view('Profile.settings', compact('user'));
    }

    public function updater(Request $req) 
    {
        $user =  $req->validate([
            'name' => 'required',
            'password' => 'required|min:6',
        ]);

        $findUser = User::where('name', '=', $req->name)->first();

        if (!$findUser) return back()->withErrors([
            'name' => 'User does not exist',
        ]);

        $findUser->update($user);

        return redirect()->route('home');
    }

    public function deleter(Request $req) 
    {
        $req->only('name', 'password');
        $user = $req->only('name', 'password');
        $findUser = User::where('name', '=', $req->name)->first();

        if (!$findUser) return back()->withErrors([
            'name' => 'User does not exist',
        ]);

        $findUser->delete();

        return redirect()->route('index');

    }
}
