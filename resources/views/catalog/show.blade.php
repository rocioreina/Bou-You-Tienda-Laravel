@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="{{$item['photo']}}" style="height:70vh" class="border border-gray-300"/>
        </div>
        <div class="col-sm-8">
            <h1>{{$item['name']}}</h1>
            <h2>{{$item['price']}}€</h2>

            @if(Auth::check())
                <a href="{{ url('/addToCart/' . $item -> id) }}">
                    <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-green-400 text-white hover:bg-green-600 mt-4">Añadir al carrito</button>
                </a>
                <a href="{{ url('/addToFav/' . $item -> id) }}">
                    <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-green-400 text-white hover:bg-green-600 mt-4">Añadir a favoritos</button>
                </a>
                @if(Auth::user()->role == 'admin')
                    <a href="{{ url('/deleteItem/' . $item->id) }}">
                        <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-500 text-white hover:bg-red-600 mt-4">Eliminar artículo</button>
                    </a>
                    <a href="{{ url('/edit/' . $item->id) }}">
                        <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-500 text-white hover:bg-blue-600 mt-4">Editar articulo</button>
                    </a>
                @endif
            @endif
            <a href="{{ route("catalog") }}" type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-100 text-gray-800 hover:bg-gray-200 text-gray-900 border-gray-900 hover:bg-gray-900 hover:text-white bg-white hover:bg-gray-900 mt-4">Volver al catalogo</a>


        </div>
    </div>
@endsection
