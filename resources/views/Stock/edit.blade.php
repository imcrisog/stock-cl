@extends('layouts.app') 

@section('content')
<a href="{{route('stocks.index')}}" class="z-10 absolute top-0 left-0 p-2 rounded-md border-[1px] border-gray-600 hover:bg-gray-600 font-extrabold m-4">
    <svg  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-square-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 2h-14a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3 -3v-14a3 3 0 0 0 -3 -3zm-9.387 6.21l.094 .083l2.293 2.292l2.293 -2.292a1 1 0 0 1 1.497 1.32l-.083 .094l-2.292 2.293l2.292 2.293a1 1 0 0 1 -1.32 1.497l-.094 -.083l-2.293 -2.292l-2.293 2.292a1 1 0 0 1 -1.497 -1.32l.083 -.094l2.292 -2.293l-2.292 -2.293a1 1 0 0 1 1.32 -1.497z" /></svg>
</a>
<div class="w-auto h-1/2 m-auto bg-slate-800 rounded-md p-2 pt-4 relative ">
    
    <span class="text-2xl text-center md:text-start font-bold flex w-full justify-center flex-col md:flex-row">Editar una o más caracteristicas: <strong class="text-sky-400">{{$stock->CODIGO}}</strong></span>
    <form action="{{route('stocks.update', $stock->CODIGO)}}" method="post" class="space-y-2">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-3 md:grid-cols-5 grid-rows-3 my-2 gap-2 ">
            @foreach($stocksColumns as $key => $value)
            @if($value == 'DOT')
                <div class="flex justify-center">
                    <input type="date" autocomplete="off" maxlength="20" name="{{$value}}" id="{{$value}}" class="w-3/4 bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="{{$value}}">
                </div>
            @else
                <div class="flex justify-center">
                    <input type="text" autocomplete="off" maxlength="20" name="{{$value}}" id="{{$value}}" class="w-3/4 bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="{{$value}}">
                </div>
            @endif
            @endforeach
        </div>
    
        <div class="mt-2 px-4 w-full justify-center flex border-t-[1px] border-gray-800">
            <button class="w-full font-bold border-2 border-blue-500 transform duration-150 hover:bg-blue-600 rounded-md py-2 px-4 active:scale-95 active:bg-blue-700">Editar el stock</button>
        </div>
    </form>
</div>

@endsection
