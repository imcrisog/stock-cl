@extends('layouts.app')

@section('content')
<div class="m-6 w-full h-full flex bg-slate-800 rounded-md flex-col">
    <div class="w-auto m-4 mb-0 flex flex-row justify-between items-center">
        <div class="inline-flex items-center gap-2">
            <span>
            <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-warehouse"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21v-13l9 -4l9 4v13" /><path d="M13 13h4v8h-10v-6h6" /><path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" /></svg>
            </span>
            <h2 class="font-bold text-xl">Stocks</h2>
        </div>
        <section class="flex flex-row gap-x-2 items-center">
            <div class="flex-inline items-center text-gray-900 font-medium">
                <input type="text" placeholder="Buscar" class="p-2 rounded-md bg-slate-600 text-white border border-gray-500 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <a href="{{route('stocks.create')}}" class="font-semibold bg-amber-400 hover:bg-amber-500 rounded-md px-4 py-2">
                Añadir stock
    
            </a>
        </section>

    </div>

    <table class="items-center text-center m-4">
        <thead class="bg-slate-700 border-t-2 border-b-2 border-gray-500 h-10">
            <tr>
                <th class="w-1/6">Nombre</th>
                <th class="w-1/6">Descripción</th>
                <th class="w-1/6">Precio</th>
                <th class="w-1/6">Cantidad</th>
                <th class="w-1/6">Desde</th>
                <th class="w-1/6">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stocks as $key => $stock)
            <tr class="border-b-[1px] border-slate-500">
                <td class="w-1/6">{{$stock->name}}</td>
                <td class="w-1/6 text-sm">{{$stock->description}}</td>
                <td class="w-1/6">${{$stock->price}}CLP</td>
                <td class="w-1/6">{{$stock->quantity}}</td> 
                <td class="w-1/6">{{$stock->from}}</td>
                <td class="w-1/6 h-full inline-flex items-center justify-center space-x-2 py-2">
                    <a href="{{ route('stocks.show', $stock->id) }}" class="border-2 border-gray-500 hover:bg-gray-500 rounded-md px-2 py-2">
                        <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-circle-horizontal"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M8 12l0 .01" /><path d="M12 12l0 .01" /><path d="M16 12l0 .01" /></svg>
                    </a>
                    <a href="{{route('stocks.edit', $stock->id)}}" class="border-2 border-blue-500 hover:bg-blue-500 rounded-md px-2 py-2">
                        <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                    </a>
                    <a href="{{ route('stocks.destroy', $stock->id) }}" class="border-2 border-red-500 hover:bg-red-500 rounded-md px-2 py-2">
                        <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7h16" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M10 12l4 4m0 -4l-4 4" /></svg>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection