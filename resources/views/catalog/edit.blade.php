@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top: 40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center bg-gray-200">
                    <h3 class="text-xl font-bold">Modificar artículo</h3>
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
                <div class="flex-auto p-6" style="padding: 30px">
                    <form action="{{ url('/edit/'.$item->id) }}" method="POST" class="max-w-sm mx-auto">
                        @method('PUT')
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Nombre</label>
                            <input type="text" name="name" id="name" class="form-input border-gray-400 focus:border-orange-500 focus:ring-orange-500" value="{{ $item->name }}">
                        </div>

                        <div class="mb-4">
                            <label for="price" class="block text-gray-700 font-bold mb-2">Precio</label>
                            <input type="text" name="price" id="price" class="form-input border-gray-400 focus:border-orange-500 focus:ring-orange-500" value="{{ $item->price }}">
                        </div>

                        <div class="mb-4">
                            <label for="photo" class="block text-gray-700 font-bold mb-2">Foto</label>
                            <input type="text" name="photo" id="photo" class="form-input border-gray-400 focus:border-orange-500 focus:ring-orange-500" value="{{ $item->photo }}" style="width: 100%">
                        </div>

                        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700" style="display:inline">
                            Modificar artículo
                        </button>


                        {{-- TODO: Cerrar formulario --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

