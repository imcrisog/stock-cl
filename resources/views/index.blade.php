@extends('layouts.initial')

@section('content')
<div class="w-full h-screen flex bg-slate-900 text-white">
    <div class="w-1/2 h-1/2 rounded-md bg-slate-800 flex flex-col justify-center items-center m-auto">
        <h2 class="font-bold text-2xl">Bienvenido a Stock Cl</h2>
        <div class="m-auto justify-center flex items-center font-bold">
            <a href="{{route('login')}}" class="border-2 border-sky-300 rounded-md p-2 px-4 transform duration-150 hover:bg-sky-500 hover:text-slate-700">Iniciar sesión</a>
        </div>
    </div>
</div>
@endsection