@extends('layouts.app')

@section('content')
<?php 

$useragent = $_SERVER['HTTP_USER_AGENT'];
$isMobile = preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4));

if ($isMobile) 
{
  $stocksColumns = array_filter($stocksColumns, function ($elem) {
    return in_array($elem, ['CODIGO', 'MODELO']);
  });
} ?>

<div class="m-0 my-2 mb-4 md:mb-4 md:m-4 w-full h-full flex bg-slate-800 rounded-md flex-col z-[1] overflow-auto">
    <div class="w-auto m-4 mb-0 flex flex-row justify-between items-center">
        <div class="hidden md:inline-flex items-center gap-2">
            <span>
                <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-warehouse"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21v-13l9 -4l9 4v13" /><path d="M13 13h4v8h-10v-6h6" /><path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" /></svg>
            </span>
            <h2 class="font-bold text-xl">Stocks</h2>
        </div>
        <section class="flex flex-row gap-x-2 items-center w-full md:w-3/4">
            @if (!empty($findStock))
                <a href="{{route('stocks.index')}}" class="inline-flex border-2 text-gray-500 border-gray-500 hover:text-white hover:bg-gray-500 p-2 rounded-lg transform duration-150 active:scale-90 active:bg-gray-700">
                    <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-square-rounded-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 2l.324 .001l.318 .004l.616 .017l.299 .013l.579 .034l.553 .046c4.785 .464 6.732 2.411 7.196 7.196l.046 .553l.034 .579c.005 .098 .01 .198 .013 .299l.017 .616l.005 .642l-.005 .642l-.017 .616l-.013 .299l-.034 .579l-.046 .553c-.464 4.785 -2.411 6.732 -7.196 7.196l-.553 .046l-.579 .034c-.098 .005 -.198 .01 -.299 .013l-.616 .017l-.642 .005l-.642 -.005l-.616 -.017l-.299 -.013l-.579 -.034l-.553 -.046c-4.785 -.464 -6.732 -2.411 -7.196 -7.196l-.046 -.553l-.034 -.579a28.058 28.058 0 0 1 -.013 -.299l-.017 -.616c-.003 -.21 -.005 -.424 -.005 -.642l.001 -.324l.004 -.318l.017 -.616l.013 -.299l.034 -.579l.046 -.553c.464 -4.785 2.411 -6.732 7.196 -7.196l.553 -.046l.579 -.034c.098 -.005 .198 -.01 .299 -.013l.616 -.017c.21 -.003 .424 -.005 .642 -.005zm.707 5.293a1 1 0 0 0 -1.414 0l-4 4a1.037 1.037 0 0 0 -.2 .284l-.022 .052a.95 .95 0 0 0 -.06 .222l-.008 .067l-.002 .063v-.035v.073a1.034 1.034 0 0 0 .07 .352l.023 .052l.03 .061l.022 .037a1.2 1.2 0 0 0 .05 .074l.024 .03l.073 .082l4 4l.094 .083a1 1 0 0 0 1.32 -.083l.083 -.094a1 1 0 0 0 -.083 -1.32l-2.292 -2.293h5.585l.117 -.007a1 1 0 0 0 -.117 -1.993h-5.585l2.292 -2.293l.083 -.094a1 1 0 0 0 -.083 -1.32z" fill="currentColor" stroke-width="0" /></svg>
                </a>
            @endif
            <div class="flex-inline items-center text-gray-900 font-medium w-full">
                    <form action="{{route('stocks.index', request()->search);}}" method="post" id="searchForm">
                        <input type="text" name="search" placeholder="Buscar por Ancho, Perfil o Aro..." autocomplete="off" id="searcher" value="" onkeyup="search(this);" class="w-full p-2 rounded-md bg-slate-600 text-white border border-gray-500 focus:ring-blue-500 focus:border-blue-500">
                    </form>
            </div>
            @if ($role->id <= 2)
                <a href="{{route('stocks.create')}}" class="p-[0.25rem] w-auto md:max-w-32 md:w-1/4 font-semibold bg-amber-500 hover:bg-amber-600 rounded-md md:px-4 md:py-2">
                    Añadir stock
                </a>
            @endif
        </section>

    </div>
    <table class="items-center text-center m-0 md:m-2 overflow-auto" id="table">
        <thead class="bg-slate-700 border-t-2 border-b-2 border-gray-500 h-[10%]">
            <tr>
                @foreach($stocksColumns as $key => $value)

                    <th class=" w-[3%] font-semibold border-r-[1px] border-gray-400">{{ $value }}</th>
                @endforeach
                @if ($role->id === 1)
                    <th class="w-[3%] font-semibold">Acciones</th>
                @endif
            </tr>
        </thead>
        <tbody id="table-body">
        @if (!empty($findStock))
            @foreach($findStock as $key => $stock)
                <tr class="h-4 border-b-[1px] border-slate-500" id="tr">
                    @foreach($stocksColumns as $key => $value) 
                        <td class="w-[3%] font-semibold py-2">{{ $stock->$value }}</td>
                    @endforeach
                    @if ($role->id === 1)
                        <td class="w-1/6 h-full inline-flex items-center justify-center space-x-2 py-2">
                            <a href="{{ route('stocks.show', $stock->CODIGO) }}" class="border-2 border-gray-500 transform duration-100 hover:bg-gray-500 rounded-md px-2 py-2">
                                <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-circle-horizontal"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M8 12l0 .01" /><path d="M12 12l0 .01" /><path d="M16 12l0 .01" /></svg>
                            </a>
                            <a href="{{route('stocks.edit', $stock->CODIGO)}}" class="border-2 border-blue-500 transform duration-100 hover:bg-blue-500 rounded-md px-2 py-2">
                                <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                            </a>
                        </td>
                    @endif
                <tr/>
            @endforeach
        @else
            @foreach($stocks as $key => $stock)
            <tr class="h-[8%] md:h-[1rem] border-b-[1px] border-slate-500" id="tr">
                @foreach($stocksColumns as $key => $value)
                    <td class="w-[3%] font-semibold py-2">{{ $stock->$value }}</td>
                @endforeach

                @if ($role->id === 1)
                <td class="w-1/6 h-full inline-flex items-center justify-center space-x-2 py-2">
                    <a href="{{ route('stocks.show', $stock->CODIGO) }}" class="border-2 border-gray-500 transform duration-100 hover:bg-gray-500 rounded-md p-2">
                        <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-circle-horizontal"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M8 12l0 .01" /><path d="M12 12l0 .01" /><path d="M16 12l0 .01" /></svg>
                    </a>
                    <a href="{{route('stocks.edit', $stock->CODIGO)}}" class="border-2 border-blue-500 transform duration-100 hover:bg-blue-500 rounded-md p-2">
                        <svg width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                    </a>
                </td>
                @endif
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="inline-flex items-center justify-center p-2 w-auto max-w-fit gap-2 text-balance">
        {{$stocks->links()}}
        <div>
            <select name="perPage" id="perPage" class="w-auto rounded-md bg-sky-300 p-2 text-black font-semibold border-2 border-slate-500">
                <option value="">Stock</option>
                <option value="5">5</option>
                <option class="sm:block md:hidden" value="7">7</option>
                <option class="hidden md:block" value="10">10</option>
                <option class="hidden md:block" value="15">15</option>
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
