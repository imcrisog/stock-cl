@extends('layouts.app')

@section('content')
<div class="w-auto h-1/2 m-auto bg-slate-800 rounded-md p-2">
    <span class="text-2xl font-bold">Añadir un objeto</span>
    <form action="{{route('stocks.store')}}" method="post" class="space-y-2 flex flex-col my-2">
        <section class="inline-flex flex-row justify-between">
            <div>
                <label for="name"></label>
                <input required type="text" maxlength="255" name="name" id="name" class="bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="Nombre">
            </div>
            <div class="w-1/3 m-auto">
                <label for="quantity"></label>
                <input required type="number" name="quantity" id="quantity" style="width: -webkit-fill-available;" class=" bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="Cantidad">
            </div>
        </section>
        <section class="inline-flex flex-row justify-between">
            <div class="w-1/2">
                <label for="price"></label>
                <input required type="number" name="price" id="price" class="bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="Precio">
            </div>
            <div class="w-2/5 m-auto">
                <label for="from"></label>
                <input required type="text" maxlength="5" name="from" id="from" style="width: -webkit-fill-available;" class=" bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="De Donde">
            </div>
        </section>
        <div>
            <label for="description"></label>
            <input required type="text" maxlength="255" minlength="1" name="description" id="description" style="width: -webkit-fill-available;" class=" bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="Descripción">
        </div>
        <div class="my-2 mx-auto border-t-[1px] border-gray-800">
            <button class="font-bold border-2 border-blue-500 transform duration-150 hover:bg-blue-600 rounded-md py-2 px-4">Añadir</button>
        </div>
        <input type="timestamp" name="created_at" id="created_at" class="hidden" value="">
    </form>
</div>
@endsection