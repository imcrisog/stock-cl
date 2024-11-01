@extends('layouts.app')

@section('content')
<a href="{{route('stocks.index')}}" class="absolute top-0 left-0 p-2 rounded-md border-[1px] border-gray-600 hover:bg-gray-600 font-extrabold m-4">
    <svg  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-square-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 2h-14a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3 -3v-14a3 3 0 0 0 -3 -3zm-9.387 6.21l.094 .083l2.293 2.292l2.293 -2.292a1 1 0 0 1 1.497 1.32l-.083 .094l-2.292 2.293l2.292 2.293a1 1 0 0 1 -1.32 1.497l-.094 -.083l-2.293 -2.292l-2.293 2.292a1 1 0 0 1 -1.497 -1.32l.083 -.094l2.292 -2.293l-2.292 -2.293a1 1 0 0 1 1.32 -1.497z" /></svg>
</a>
<div class="w-full h-full rounded-md flex m-auto max-h-screen">
    <div class="w-auto m-auto flex flex-col items-center bg-slate-800 rounded-md p-4 font-semibold min-w-80 relative">
        
        <span class="text-xl font-bold my-2">{{$stock->name}}</span>
        <div class="flex flex-col gap-y-2 text-sm">
            <div class="flex flex-col gap-x-2 max-w-sm">
                <span>Descripción:</span>
                <span>{{$stock->description}}</span>
            </div>
            <div class="flex flex-row gap-x-2">
                <span>Precio:</span>
                <span>${{$stock->price}}CLP</span>
            </div>
            <div class="flex flex-row gap-x-2">
                <span>Cantidad:</span>
                <span>{{$stock->quantity}}</span>
            </div>
            <div class="flex flex-row gap-x-2">
                <span>Desde:</span>
                <span>{{$stock->from}}</span>
            </div>
            <div class="flex flex-row gap-x-2">
                <span>Actualizado el:</span>
                <span>{{$stock->updated_at}}</span>
            </div>
            <div class="flex flex-row gap-x-2">
                <span>Creado el:</span>
                <span>{{$stock->created_at}}</span>
            </div>

        </div>
    </div>

</div>
@endsection