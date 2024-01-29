@extends('layouts.master')
@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center bg-gray-200">
                    <h3 class="text-xl font-bold" style="margin-bottom: 10px;">Lista de compra</h3>
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
                @if (session()->get('cart'))
                        <?php $subtotal = 0; ?>
                    <div class="flex flex-wrap">
                        @foreach( session()->get('cart') as $id => $item )
                            <div class="sm:w-1/2 pr-4 pl-4 sm:w-1/3 pr-4 pl-4 md:w-1/4 pr-4 pl-4 text-center">
                                <a href="{{ url('/show/' . $id ) }}" class="flex flex-col items-center justify-center">
                                    <img src="{{ $item['photo'] }}" style="height:200px" alt="poster {{ $item['name'] }}"/>
                                    <div style="min-height:45px; margin:5px 0 10px 0">
                                        <h4>{{ $item['quantity'] }}</h4>
                                        <h4>{{ $item['name'] }}</h4>
                                        <p>{{ $item['price'] }}€</p>
                                    </div>
                                    <a href="{{ url('/deleteFromCart/' . $id) }}">
                                        <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-500 text-white hover:bg-red-600">Eliminar artículo</button>
                                    </a>
                                </a>
                            </div>
                                <?php $subtotal += $item['price']; ?>
                        @endforeach
                    </div>

                    <div class="text-center">
                        <h4 style="font-size: 20px; font-weight: bold; color: #333; margin-top: 20px;">Subtotal: {{ $subtotal }}€</h4>
                    </div>


                    <a href="{{ route('payment.checkout') }}">
                        <button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 my-14 leading-normal no-underline bg-green-400 text-white hover:bg-green-600">Tramitar pedido</button>
                    </a>
                @endif
            </div>
        </div>
    </div>
@endsection

