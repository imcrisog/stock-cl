<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title ?? 'Stock Cl'}}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <style>
        @media (min-width: 768px) {
            #sidebar {
                display: block;
                width: 16.6%;

            }

            #menu {
                display: none;   
            }

            #content {
                width: 83%;
            }

        }
    </style>
</head>
<body class="bg-slate-900 flex">
    <div id="background" class="w-full h-screen opacity-50 fixed z-[25] bg-black hidden"></div>
    <main class="w-full h-full text-white relative">
        <nav class="w-full h-12 absolute md:fixed top-0 right-0  bg-slate-800 flex justify-end z-10">
            <div class="flex items-center justify-end w-5/6 h-full [&>*]:mx-2">
                <div class="inline-flex w-fit items-center align-sub gap-2">
                    <a href="{{route('auth.logout')}}" class="font-bold rounded-md p-2 order-2 text-red-400 border-2 border-red-500 transform duration-150 active:scale-95 active:bg-red-700">
                    <svg   width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
                    </a>
                    <a href="{{route('settings.show')}}" class="font-bold border-[1px] md:border-none border-gray-300 transform hover:bg-slate-600 rounded-md p-2 order-1"> 
                        <svg  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor" stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-settings"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                    </a>
                </div>
            </div>
        </nav>

        <section id="menu" style="z-index: 50;" class="block fixed bottom-0 right-0 m-4 border-[1px] border-sky-600 active:bg-sky-700 p-2 transform duration-150 active:scale-90 hover:bg-sky-800">
            <span>
                <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
            </span>
        </section>

        <aside id="sidebar" class="fixed bottom-0 left-0 w-full h-full bg-slate-950 justify-start z-20 hidden">
            <div class="flex justify-center items-center w-full mb-2 border-b-[1px] border-slate-700 p-2">  
                <a href="{{route('home')}}" class="text-2xl font-bold mx-auto">Stock Cl</a> 
            </div>
            <div class="flex flex-col  w-full h-auto md:h-full gap-y-4"> 
                <div class="text-center transform duration-200 hover:bg-slate-600">
                    <a href="{{route('home')}}" class="text-xl font-bold w-full flex py-8 md:py-2 justify-center">Home</a>
                </div>

                <div class="text-center transform duration-200 hover:bg-slate-600">
                    <a href="{{route('stocks.index')}}" class="text-xl font-bold w-full flex py-8 md:py-2 justify-center">Stocks</a>
                </div>


                
                <!-- all the options cases and general options -->

                <div class="w-full absolute bg-slate-900 bottom-0 my-8 text-center inline-flex px-4 py-2">
                    <section class="inline-flex rounded-lg bg-slate-600 py-2 px-4 text-center"> 
                        <span>
                            {{ $user->name[0] }}
                        </span> 
                    </section>
                    <span class="font-bold inline-flex justify-center items-center text-center w-full h-auto ">
                        {{ucfirst($role->name)}}
                    </span>
                </div>

            </div>
        </aside>

        <section id="content" class="w-full mt-[3rem] h-auto flex place-self-end min-h-[90vh] relative">
            @yield('content')
        </section>

    </main>
</body>

<script>
    const menu = document.getElementById('menu');
    menu.addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('hidden');
    });
</script>
</html>