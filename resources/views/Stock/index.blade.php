@extends('layouts.app')

@section('content')
<div class="m-6 min-w-[full] w-full h-full flex bg-slate-800 rounded-md flex-col z-[1]">
    <div class="w-auto m-4 mb-0 flex flex-row justify-between items-center">
        <div class="inline-flex items-center gap-2">
            <span>
            <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-warehouse"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21v-13l9 -4l9 4v13" /><path d="M13 13h4v8h-10v-6h6" /><path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" /></svg>
            </span>
            <h2 class="font-bold text-xl">Stocks</h2>
        </div>
        <section class="flex flex-row gap-x-2 items-center w-3/4">
            @if (!empty($findStock))
                <a href="{{route('stocks.index')}}" class="inline-flex border-2 text-gray-500 border-gray-500 hover:text-white hover:bg-gray-500 p-2 rounded-lg transform duration-150 active:scale-90 active:bg-gray-700">
                    <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-square-rounded-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm.707 5.293a1 1 0 0 0 -1.414 0l-4 4a1.037 1.037 0 0 0 -.2 .284l-.022 .052a.95 .95 0 0 0 -.06 .222l-.008 .067l-.002 .063v-.035v.073a1.034 1.034 0 0 0 .07 .352l.023 .052l.03 .061l.022 .037a1.2 1.2 0 0 0 .05 .074l.024 .03l.073 .082l4 4l.094 .083a1 1 0 0 0 1.32 -.083l.083 -.094a1 1 0 0 0 -.083 -1.32l-2.292 -2.293h5.585l.117 -.007a1 1 0 0 0 -.117 -1.993h-5.585l2.292 -2.293l.083 -.094a1 1 0 0 0 -.083 -1.32z" fill="currentColor" stroke-width="0" /></svg>
                </a>
            @endif
            <div class="flex-inline items-center text-gray-900 font-medium w-full">
                    <form action="{{route('stocks.index', request()->search);}}" method="post" id="searchForm">
                        <input type="text" name="search" placeholder="Buscar por Codigo, Marca o Modelo..." autocomplete="off" id="searcher" value="" onkeyup="search(this);" class="w-full p-2 rounded-md bg-slate-600 text-white border border-gray-500 focus:ring-blue-500 focus:border-blue-500">
                    </form>
                
            </div>
            @if ($role->id <= 2)
                <a href="{{route('stocks.create')}}" class=" max-w-32 w-1/4 font-semibold bg-amber-500 hover:bg-amber-600 rounded-md px-4 py-2">
                    Añadir stock
                </a>
            @endif
        </section>

    </div>

    <table class="items-center text-center m-4" id="table">
        <thead class="bg-slate-700 border-t-2 border-b-2 border-gray-500 h-10">
            <tr>
                @foreach($stocksColumns as $key => $value)
                    <th class="w-[3%] font-semibold border-r-[1px] border-gray-400">{{ $value }}</th>
                @endforeach
                <th class="w-[3%] font-semibold">Acciones</th>
            </tr>
        </thead>
        <tbody id="table-body">
        @if (!empty($findStock))
            @foreach($findStock as $key => $stock)
                <tr class="border-b-[1px] border-slate-500" id="tr">
                    @foreach($stocksColumns as $key => $value) 
                        <td class="w-[3%] font-semibold">{{ $stock->$value }}</td>
                    @endforeach
                <td class="w-1/6 h-full inline-flex items-center justify-center space-x-2 py-2">
                    <a href="{{ route('stocks.show', $stock->id) }}" class="border-2 border-gray-500 transform duration-100 hover:bg-gray-500 rounded-md px-2 py-2">
                        <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-circle-horizontal"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M8 12l0 .01" /><path d="M12 12l0 .01" /><path d="M16 12l0 .01" /></svg>
                    </a>
                @if ($role->id <= 2)
                    <a href="{{route('stocks.edit', $stock->id)}}" class="border-2 border-blue-500 transform duration-100 hover:bg-blue-500 rounded-md px-2 py-2">
                        <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                    </a>
                @endif
                </td>
            @endforeach
        @else
            @foreach($stocks as $key => $stock)
            <tr class="border-b-[1px] border-slate-500" id="tr">
                @foreach($stocksColumns as $key => $value)
                    <td class="w-[3%] font-semibold">{{ $stock->$value }}</td>
                @endforeach
                
                <td class="w-1/6 h-full inline-flex items-center justify-center space-x-2 py-2">
                    <a href="{{ route('stocks.show', $stock->CODIGO) }}" class="border-2 border-gray-500 transform duration-100 hover:bg-gray-500 rounded-md px-2 py-2">
                        <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-circle-horizontal"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M8 12l0 .01" /><path d="M12 12l0 .01" /><path d="M16 12l0 .01" /></svg>
                    </a>
                    @if ($role->id <= 2)
                        <a href="{{route('stocks.edit', $stock->CODIGO)}}" class="border-2 border-blue-500 transform duration-100 hover:bg-blue-500 rounded-md px-2 py-2">
                            <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                        </a>
                    @endif
                </td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="inline-flex items-center justify-center p-2 w-auto max-w-[35rem] gap-2">
        {{$stocks->links()}}
        <div>
            <select name="perPage" id="perPage" class="w-auto rounded-md bg-sky-300 p-2 text-black font-semibold border-2 border-slate-500">
                <option value="">Stock</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
    </div>
</div>

<script>
    const perPage = document.getElementById('perPage');
    const searchForm = document.getElementById('searchForm');

    searchForm.addEventListener('submit', function(e) {
        e.preventDefault();
        window.location.href = window.location.href.split('?')[0] + '?search=' + searchForm.search.value;
    });

    perPage.addEventListener('change', function() {
        window.location.href = window.location.href.split('?')[0] + '?perPage=' + perPage.value;
    });

</script>
@endsection