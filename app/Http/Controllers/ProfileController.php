<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function settings(Request $request) 
    {
        $role = auth()->user()->role;
        $user = auth()->user();

        return view('Profile.settings', compact('user', 'role'));
    }

    public function update(Request $request) 
    {
        $role = auth()->user()->role;
        $user = auth()->user();
        return view('Profile.update', compact('user', 'role'));
    }

    public function delete(Request $request) 
    {
        $role = auth()->user()->role;
        $user = auth()->user();
        return view('Profile.delete', compact('user', 'role'));
    }

    public function change(Request $request) 
    {
        $user = auth()->user();
        $vals =  $request->validate([
            'name' => 'string',
            'oldEmail' => 'required|email',
            'email' => 'string',
            'password' => 'string',
        ]);

        if ($user->email !== $vals['oldEmail']) return back()->withErrors(['oldEmail' => 'Invalid Email']);

        $findUser = User::where('email', '=', $request->oldEmail)->first();

        if (!$findUser) return back()->withErrors([
            'name' => 'User does not exist',
        ]);

        $findUser->update(array_filter($vals));

        return redirect()->route('settings.show');
    }

    public function destroy(Request $request)
    {
        $user = auth()->user();

        $vals =  $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        if ($user->email !== $vals['email'] || Hash::check($vals['password'], $user->password)) 
        {
            return back()->withErrors([
                'email' => 'Invalid Email'
            ]);
        }
        $findUser = User::where('email', '=', $request->email)->first();
        if (!$findUser) return back()->withErrors();

        $findUser->delete();

        return redirect()->route('auth.login.show');

    }
}
