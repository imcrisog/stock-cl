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
                    <a href="{{ route('stocks.show', $stock->id) }}" class="border-2 border-gray-500 transform duration-100 hover:bg-gray-500 rounded-md px-2 py-2">
                        <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-circle-horizontal"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M8 12l0 .01" /><path d="M12 12l0 .01" /><path d="M16 12l0 .01" /></svg>
                    </a>
                    @if ($role->id <= 2)
                        <a href="{{route('stocks.edit', $stock->id)}}" class="border-2 border-blue-500 transform duration-100 hover:bg-blue-500 rounded-md px-2 py-2">
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