@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="w-full h-full flex flex-1 bg-slate-900 text-white">
    <div class="w-auto min-w-[30%] h-1/2 rounded-md bg-slate-800 flex flex-col justify-center items-center m-auto px-2">
        <h2 class="font-bold text-2xl">user: {{$user}}</h2>
        
    </div>
</div>
@endsection