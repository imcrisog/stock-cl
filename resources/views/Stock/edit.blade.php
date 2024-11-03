@extends('layouts.app') 

@section('content')
<a href="{{route('stocks.index')}}" class="absolute top-0 left-0 p-2 rounded-md border-[1px] border-gray-600 hover:bg-gray-600 font-extrabold m-4">
    <svg  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-square-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 2h-14a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3 -3v-14a3 3 0 0 0 -3 -3zm-9.387 6.21l.094 .083l2.293 2.292l2.293 -2.292a1 1 0 0 1 1.497 1.32l-.083 .094l-2.292 2.293l2.292 2.293a1 1 0 0 1 -1.32 1.497l-.094 -.083l-2.293 -2.292l-2.293 2.292a1 1 0 0 1 -1.497 -1.32l.083 -.094l2.292 -2.293l-2.292 -2.293a1 1 0 0 1 1.32 -1.497z" /></svg>
</a>
<div class="w-auto h-1/2 m-auto bg-slate-800 rounded-md p-4 pt-6 relative">
    
    <span class="text-2xl font-bold">Editar objeto: {{$stock->name}}</span>
    <form action="{{route('stocks.update', $stock->id)}}" method="post" class="space-y-2 flex flex-col my-4">
        @csrf
        @method('PUT')
        <section class="inline-flex flex-row justify-between">
            <div>
                <label for="name"></label>
                <input type="text" maxlength="255" name="name" id="name" class="bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="Nombre">
            </div>
            <div class="w-1/3 m-auto">
                <label for="quantity"></label>
                <input type="number" name="quantity" id="quantity" style="width: -webkit-fill-available;" class=" bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="Cantidad">
            </div>
        </section>
        <section class="inline-flex flex-row justify-between">
            <div class="w-1/2">
                <label for="price"></label>
                <input type="number" name="price" id="price" class="bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="Precio">
            </div>
            <div class="w-1/3 m-auto">
                <select name="from" id="from" class="bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md text-center">
                    <option value="">Seleccione</option>
                    <option value="one">Uno</option>
                    <option value="two">Dos</option>
                    <option value="three">Tres</option>
                </select>
            </div>
        </section>
        <div>
            <label for="description"></label>
            <input type="text" maxlength="255" minlength="1" name="description" id="description" style="width: -webkit-fill-available;" class=" bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="Descripción">
        </div>
        <div class="mt-2 mx-auto border-t-[1px] border-gray-800">
            <button class="font-bold border-2 border-blue-500 transform duration-150 hover:bg-blue-600 rounded-md py-2 px-4 active:scale-95 active:bg-blue-700">Editar el stock</button>
        </div>
    </form>
</div>

@endsection