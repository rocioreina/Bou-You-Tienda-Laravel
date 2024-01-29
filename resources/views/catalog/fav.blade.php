@extends('layouts.master')
@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center bg-gray-200">
                    <h3 class="text-xl font-bold" style="margin-bottom: 10px;">Favoritos</h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="flex flex-wrap">
                    @if (session()->get('fav'))
                        @foreach( session()->get('fav') as $id => $item )
                            <div class="sm:w-1/2 pr-4 pl-4 sm:w-1/3 pr-4 pl-4 md:w-1/4 pr-4 pl-4 text-center">
                                <a href="{{ url('/show/' . $id ) }}" class="flex flex-col items-center justify-center">
                                    <img src="{{ $item['photo'] }}" style="height:200px" alt="poster {{ $item['name'] }}"/>
                                    <h4 style="min-height:45px; margin:5px 0 10px 0">
                                        {{ $item['name'] }}
                                        {{ $item['price'] }}
                                    </h4>
                                    <a href="{{ url('/deleteFromFav/' . $id) }}">
                                        <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-500 text-white hover:bg-red-600">Eliminar articulo favorito</button>
                                    </a>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
