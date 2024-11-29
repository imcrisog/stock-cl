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
        
        <div id="sidebar" class="z-30 fixed top-0 left-0 h-full w-64 bg-slate-950 text-white transform transition-transform duration-300 ease-in-out shadow-lg rounded-r-xl">
            <div class="flex flex-col h-full p-4 space-y-6">
                <div class="flex items-center justify-center py-4 border-b-[1px] border-gray-600">
                    <span class="text-2xl font-bold">
                        STOCK-CL
                    </span>
                </div>
                <nav class="flex-grow">
                    <ul class="space-y-4">
                        <li>
                            <button aria-label="Home" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-400 transition-all duration-200">
                            <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-home"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12.707 2.293l9 9c.63 .63 .184 1.707 -.707 1.707h-1v6a3 3 0 0 1 -3 3h-1v-7a3 3 0 0 0 -2.824 -2.995l-.176 -.005h-2a3 3 0 0 0 -3 3v7h-1a3 3 0 0 1 -3 -3v-6h-1c-.89 0 -1.337 -1.077 -.707 -1.707l9 -9a1 1 0 0 1 1.414 0m.293 11.707a1 1 0 0 1 1 1v7h-4v-7a1 1 0 0 1 .883 -.993l.117 -.007z" /></svg>
                                <a href="{{route('home')}}" class="text-lg font-medium">Home</a>
                            </button>
                        </li>
                        <li>
                            <button aria-label="Stocks" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-400 transition-all duration-200">
                            <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-stack-3"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20.894 17.553a1 1 0 0 1 -.447 1.341l-8 4a1 1 0 0 1 -.894 0l-8 -4a1 1 0 0 1 .894 -1.788l7.553 3.774l7.554 -3.775a1 1 0 0 1 1.341 .447m0 -4a1 1 0 0 1 -.447 1.341l-8 4a1 1 0 0 1 -.894 0l-8 -4a1 1 0 0 1 .894 -1.788l7.552 3.775l7.554 -3.775a1 1 0 0 1 1.341 .447m0 -4a1 1 0 0 1 -.447 1.341l-8 4a1 1 0 0 1 -.894 0l-8 -4a1 1 0 0 1 .894 -1.788l7.552 3.775l7.554 -3.775a1 1 0 0 1 1.341 .447m-8.887 -8.552q .056 0 .111 .007l.111 .02l.086 .024l.012 .006l.012 .002l.029 .014l.05 .019l.016 .009l.012 .005l8 4a1 1 0 0 1 0 1.788l-8 4a1 1 0 0 1 -.894 0l-8 -4a1 1 0 0 1 0 -1.788l8 -4l.011 -.005l.018 -.01l.078 -.032l.011 -.002l.013 -.006l.086 -.024l.11 -.02l.056 -.005z" /></svg>
                                <a href="{{route('stocks.index')}}" class="text-lg font-medium">Stocks</a>
                            </button>
                        </li>
                    </ul>
                </nav>
                <button id="toggle-sidebar" aria-label="Toggle Sidebar" class="absolute -right-4 top-1/2 transform -translate-y-1/2 bg-slate-950 text-white p-2 rounded-lg hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-400 transition-all duration-200">
                <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-square-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 16l4 -4l-4 -4" /><path d="M8 12h8" /><path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /></svg>
                </button>
            </div>
        </div>

        <section id="content" class="w-full mt-[3rem] h-auto flex place-self-end min-h-[90vh] relative">
            @yield('content')
        </section>

    </main>
</body>

<script>
    const content = document.getElementById('content');
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggle-sidebar');
    let isOpen = true;

    toggleBtn.addEventListener('click', () => {
        isOpen = !isOpen;
        sidebar.style.transform = isOpen ? 'translateX(0)' : 'translateX(-100%)';
        if (isOpen && window.innerWidth > 768) {
            content.style.width = '83%';
        } else {
            content.style.width = '100%';
        }


    });

    function handleResize() {
        if (window.innerWidth < 640 && isOpen) {
            sidebar.style.transform = 'translateX(-100%)';
            isOpen = false;
        }
    }

    window.addEventListener('resize', handleResize);
    handleResize();
</script>
</html>