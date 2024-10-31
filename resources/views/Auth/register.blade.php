@extends('layouts.initial')

@section('title', 'Register')

@section('content')
    <div>
        <form action="{{ route('auth.register.store') }}" method="POST" class="text-black">
            @csrf
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Register</button>
    </div>
@endsection