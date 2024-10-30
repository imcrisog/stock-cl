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
<body class="bg-slate-900 ">
    <main class="w-full h-full text-white">
        <nav class="w-full h-12 fixed top-0 right-0  bg-slate-800 flex justify-end">
            <div class="flex items-center justify-end w-5/6 h-full [&>*]:mx-2">
                <div class="inline-flex w-fit items-center align-sub">
                    <a href="{{route('settings')}}" class="font-bold transform hover:bg-slate-600 rounded-md p-2">
                        <svg  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-settings"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                    </a>
                </div>
            </div>
        </nav>
        <aside class="fixed bottom-0 left-0 w-1/6 h-screen bg-slate-950 justify-start">
            <div class="flex justify-center items-center w-full mb-2 border-b-[1px] border-slate-700 p-2">  
                <a href="{{route('home')}}" class="text-2xl font-bold mx-auto">Stock Cl</a> 
            </div>
            <div class="flex flex-col  w-full h-full gap-y-2"> 
                <div class="py-2 text-center w-auto transform duration-200 hover:bg-slate-600">
                    <a href="{{route('home')}}" class="text-xl font-bold">Home</a>
                </div>

                <div class="py-2 text-center transform duration-200 hover:bg-slate-600">
                    <a href="{{route('stocks.index')}}" class="text-xl font-bold">Stocks</a>
                </div>


                
                <!-- all the options cases and general options -->

            </div>
        </aside>

        <section class="w-5/6 mt-[3rem] h-auto flex place-self-end">
            @yield('content')
        </section>

    </main>
</body>
</html>