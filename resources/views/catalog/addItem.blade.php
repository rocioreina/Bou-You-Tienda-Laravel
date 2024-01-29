@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top: 40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center bg-gray-200">
                    <h3 class="text-xl font-bold">Añadir nuevo artículo</h3>
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
                    <form action="{{ route('post.addItem') }}" method="POST" class="max-w-sm mx-auto">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Nombre</label>
                            <input type="text" name="name" id="name" class="form-input border-gray-400 focus:border-orange-500 focus:ring-orange-500" value="{{ old('name') }}" placeholder="Nombre del artículo">
                        </div>

                        <div class="mb-4">
                            <label for="price" class="block text-gray-700 font-bold mb-2">Precio</label>
                            <input type="text" name="price" id="price" class="form-input border-gray-400 focus:border-orange-500 focus:ring-orange-500" value="{{ old('price') }}" placeholder="Precio del artículo">
                        </div>

                        <div class="mb-4">
                            <label for="photo" class="block text-gray-700 font-bold mb-2">Foto</label>
                            <input type="text" name="photo" id="photo" class="form-input border-gray-400 focus:border-orange-500 focus:ring-orange-500" value="{{ old('photo') }}" placeholder="URL de la foto del artículo">
                        </div>

                        <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">Añadir artículo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

