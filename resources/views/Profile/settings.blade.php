@extends('layouts.app')
@section('title', 'Settings')

@section('content')
<div class="w-full m-auto inline-flex">
    <div class="bg-slate-800 rounded-md p-4 flex flex-col justify-center items-center mx-auto w-1/2">
        <div class="flex justify-start w-full my-2">
            <span class="text-2xl font-bold">Configuración de usuario</span>
        </div>
        <section class="grid grid-cols-2 w-full">
            <div class="rounded-full bg-slate-600 w-1/2 my-2 text-slate-700 flex justify-center items-center mx-auto">
                <svg class="w-full size-full" width="24" height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" /><path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" /></svg>
            </div>
            <div class="inline-flex flex-col">
                <section>
                    <span class="font-bold">Nombre:</span>
                    <span class="font-light">{{$user->name}}</span>
                </section>
                <section>
                    <span class="font-bold">E-Mail:</span>
                    <span class="font-light">{{str_split($user->email, 3)[0]}}**@**{{array_reverse(str_split($user->email, 4))[0]}}</span>
                </section>
                <section>
                    <span class="font-bold">Rol:</span>
                    <span class="font-light">{{ucfirst($role->name)}}</span>
                </section>
                <section>
                    <span class="font-bold">Usuario creado:</span>
                    <span class="font-light">{{ucfirst($user->created_at)}}</span>
                </section>
                <section class="inline-flex flex-col">
                    <span class="font-bold">Usuario Actualizado:</span>
                    <span class="font-light">{{ucfirst($user->updated_at)}}</span>
                </section>
            </div>
        </section>
        <section class="flex justify-center w-full gap-2 text-center">
            <a href="{{route('settings.update')}}" class="w-full font-bold border-2 border-sky-500 transform duration-150 active:scale-95 active:bg-sky-700 hover:bg-sky-600 rounded-md py-2">
                Actualizar
            </a>
            <a href="{{route('settings.delete')}}" class="w-full font-bold border-2 border-red-500 transform duration-150 active:scale-95 active:bg-red-700 hover:bg-red-600 rounded-md py-2">
                Eliminar
            </a>
        </section>

    </div>
</div>

@endsection