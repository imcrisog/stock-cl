@extends('layouts.app')
@section('title', 'Settings')

@section('content')
<a href="{{route('settings.show')}}" class="z-10 absolute top-0 left-0 p-2 rounded-md border-[1px] border-gray-600 hover:bg-gray-600 font-extrabold m-4">
    <svg  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-square-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19 2h-14a3 3 0 0 0 -3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3 -3v-14a3 3 0 0 0 -3 -3zm-9.387 6.21l.094 .083l2.293 2.292l2.293 -2.292a1 1 0 0 1 1.497 1.32l-.083 .094l-2.292 2.293l2.292 2.293a1 1 0 0 1 -1.32 1.497l-.094 -.083l-2.293 -2.292l-2.293 2.292a1 1 0 0 1 -1.497 -1.32l.083 -.094l2.292 -2.293l-2.292 -2.293a1 1 0 0 1 1.32 -1.497z" /></svg>
</a>
<div class="w-full h-auto flex flex-col justify-center items-center">
    <section class="w-!/2 h-auto bg-slate-800 rounded-md p-4">
        <div class="flex justify-center">
            <span class="font-semibold text-xl">
                ¿Estas Seguro que quieres <strong class="text-red-400">BORRAR</strong> tu cuenta?
            </span>
        </div>

        <form action="{{route('settings.destroy')}}" method="post" class="space-y-2">
            @csrf
            <div>
                <span class="font-bold text-xl">
                    ¡Confirma tu retirada!
                </span>
            </div>
            <div class="inline-flex w-full justify-center">
                <input type="email" autocomplete="off" name="email" id="email" class="w-1/2 bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="Email">
            </div>
            <div class="inline-flex w-full justify-center">
                <input type="password" autocomplete="off" name="password" id="password" class="w-1/2 bg-slate-800 border-2 border-blue-300 font-semibold p-2 rounded-md" placeholder="Contraseña">
            </div>
            <div class="mx-auto border-t-[1px] border-slate-400 flex justify-center py-2">
                <button class="font-bold border-2 border-red-500 transform duration-150 active:scale-90 active:bg-red-700 hover:bg-red-600 rounded-md py-2 px-4">Eliminar</button>
            </div>
        </form>

    </section>
</div>
@endsection