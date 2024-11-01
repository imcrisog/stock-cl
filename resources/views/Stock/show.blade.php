@extends('layouts.app')

@section('content')
<a href="{{route('stocks.index')}}" class=" m-4 absolute top-0 left-0 py-2 px-4 rounded-md border-[1px] border-gray-600 hover:bg-gray-600 font-extrabold"> X </a>
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