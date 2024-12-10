@extends('layouts.app')

@section('content')
<a href="{{route('stocks.index')}}" class="absolute top-0 left-0 p-2 rounded-md border-[1px] border-gray-600 hover:bg-gray-600 font-extrabold m-4">
    <svg  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-square-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 2h-14a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3 -3v-14a3 3 0 0 0 -3 -3zm-9.387 6.21l.094 .083l2.293 2.292l2.293 -2.292a1 1 0 0 1 1.497 1.32l-.083 .094l-2.292 2.293l2.292 2.293a1 1 0 0 1 -1.32 1.497l-.094 -.083l-2.293 -2.292l-2.293 2.292a1 1 0 0 1 -1.497 -1.32l.083 -.094l2.292 -2.293l-2.292 -2.293a1 1 0 0 1 1.32 -1.497z" /></svg>
</a>
<div class="w-auto h-1/2 m-auto bg-slate-800 rounded-md p-2 pt-6">
    <div class="flex justify-center w-full">
        <span class="text-2xl font-bold">Añadir un objeto</span>
    </div>

    <form action="{{route('stocks.store')}}" method="POST" class="space-y-2 flex flex-col my-2">
        @csrf
        <div class="grid grid-cols-3 md:grid-cols-5 grid-rows-3 gap-2 ">
            @foreach($stocksColumns as $key => $value)
                @if($value == 'DOT')
                    <div class="flex justify-center">
                        <input required type="date" autocomplete="off" maxlength="20" name="{{$value}}" id="{{$value}}" class="w-3/4 bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="{{$value}}">
                    </div>
                @else
                    <div class="flex justify-center">
                        <input required type="text" autocomplete="off" maxlength="20" name="{{$value}}" id="{{$value}}" class="w-3/4 bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="{{$value}}">
                    </div>
                @endif
            @endforeach
        </div>
        
        <div class="my-2 w-full px-4 border-t-[1px] border-gray-800">
            <button class="w-full font-bold border-2 border-amber-500 transform duration-150 active:scale-95 active:bg-amber-700 hover:bg-amber-600 rounded-md py-2">Añadir el stock</button>
        </div>
    </form>
</div>
@endsection