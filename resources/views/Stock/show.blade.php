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

        <button id="buttonForDelete" class="w-full text-center flex justify-center items-center border-2 border-red-500 transform duration-200 hover:bg-red-500 rounded-md py-2 mt-4 active:scale-95 active:bg-red-700">
            <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7h16" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M10 12l4 4m0 -4l-4 4" /></svg>
        </button>
        <div id="formDeleter" class="opacity-0 z-30 transition-opacity absolute w-full h-auto">
            <section id="deleter" class="absolute m-auto bg-slate-700 rounded-md hidden z-30 transition-opacity p-2 select-none">
                <div class="relative h-full w-full p-4 pt-8">
                    <button id="backDeleter" class="absolute top-0 left-0 rounded-md border-[1px] border-gray-400 hover:bg-gray-500 font-extrabold p-[0.25rem]">
                        <svg  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-back-up"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 14l-4 -4l4 -4" /><path d="M5 10h11a4 4 0 1 1 0 8h-1" /></svg>
                    </button>
                    <form action="{{route('stocks.destroy', $stock->id)}}" method="post" class="m-auto">
                        @csrf
                        @method('DELETE')
                        <div class="inline-flex flex-col justify-center items-center text-center">
                            <span class="font-bold text-xl">¿Estás seguro de que quieres <strong class="">ELIMINAR</strong> este objeto?</span>
                            <span class="font-semibold text-green-500 text-lg"> "<strong class="text-red-400">{{strtoupper($stock->name)}}</strong>"</span>
                        </div>  
        
                        <div class="mx-auto border-t-[1px] border-slate-400 flex justify-center py-2">
                            <button class="font-bold border-2 border-red-500 transform duration-150 hover:bg-red-600 rounded-md py-2 px-4">Eliminar</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

</div>
<script src="{{asset('js/stockDeleter.js')}}"></script>
@endsection