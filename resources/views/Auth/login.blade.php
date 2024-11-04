@extends('layouts.initial')

@section('title', 'Login')

@section('content')
<div class="w-full h-screen flex bg-slate-900 text-black">
    <div class=" w-1/2 h-1/2 rounded-md bg-slate-800 flex flex-col justify-center items-center m-auto">
        <form action="{{ route('auth.login.store') }}" method="post" class="text-white flex flex-col gap-y-2">
            <h2 class="font-bold text-2xl">Stock Cl</h2>
            @csrf

            @if($errors->any())
                <h4 class="text-red-500">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </h4>
            @endif
            <div class="flex-1 relative">
                <label for="email" class="absolute text-sm text-gray-800 -translate-y-3 scale-75 top-2 z-10 origin-[0] px-2">E-Mail</label>
                <input type="email" id="email" name="email" placeholder=" " class="w-full rounded-md p-2 text-black" autocomplete="off" required>
            </div>
            <div class="flex-1 relative">
                <label for="password" class="absolute text-sm text-gray-800 -translate-y-3 scale-75 top-2 z-10 origin-[0] px-2">Contraseña</label>
                <input type="password" name="password" id="password" placeholder=" " class="w-full rounded-md p-2 text-black" autocomplete="off" required>
            </div>
            <div class="mx-6 justify-between flex items-center font-bold select-none">
                <input type="checkbox" name="remember" id="rememberme" class="rounded-full p-2">
                <label for="rememberme" class="font-semibold text-gray-300">Recordarme</label>
            </div>
            <div class="m-auto justify-center flex items-center font-bold">
                <button class="border-2 border-sky-300 rounded-md p-2 px-4 transform duration-150 hover:bg-sky-500 hover:text-slate-700">Iniciar sesión</button>
            </div>
        </form>
    </div>
</div>
@endsection