@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="w-full h-auto flex bg-slate-900"> 
    <div class="w-auto min-w-[30%] h-1/2 rounded-md bg-slate-800 flex flex-col justify-center items-center m-auto px-2">
        <h2 class="font-bold text-2xl"> User: {{ $user->name }} </h2>
        
    </div>
</div>
@endsection