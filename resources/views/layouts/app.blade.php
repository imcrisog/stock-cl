<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'Stock Cl'}}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    <main class="w-full h-screen flex bg-slate-900 text-white">
        <nav class="w-full h-10 absolute justify-between items-center bg-slate-800 text-white">
            <a href="{{route('home')}}" class="text-2xl font-bold mx-auto">Stock Cl</a>
        </nav>
        @yield('content')
    </main>
</body>
</html>