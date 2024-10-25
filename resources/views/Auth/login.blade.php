@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="w-full h-screen flex bg-slate-900 text-black">
    <div class=" w-1/2 h-1/2 rounded-md bg-slate-800 flex flex-col justify-center items-center m-auto">
        <form action="" method="post" class="text-white flex flex-col gap-y-2">
            <h2 class="font-bold text-2xl">Stock Cl</h2>
            <div class="flex-1 relative">
                <label for="name" class="absolute text-sm text-gray-800 -translate-y-3 scale-75 top-2 z-10 origin-[0] px-2">Name</label>
                <input type="text" name="name" placeholder=" " class="w-full rounded-md p-2 text-black" autocomplete="off">
            </div>
            <div class="flex-1 relative">
                <label for="password" class="absolute text-sm text-gray-800 -translate-y-3 scale-75 top-2 z-10 origin-[0] px-2">Password</label>
                <input type="password" name="password" placeholder=" " class="w-full rounded-md p-2 text-black" autocomplete="off">
            </div>
            <div class="m-auto justify-center flex items-center font-bold">
                <button class="border-2 border-sky-300 rounded-md p-2 px-4 transform duration-150 hover:bg-sky-500 hover:text-slate-700">Log in</button>
            </div>
        </form>
    </div>
</div>
@endsection