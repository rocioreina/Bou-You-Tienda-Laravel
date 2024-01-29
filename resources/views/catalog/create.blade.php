@extends('layouts.master')
@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir nuevo articulo
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
                <div class="flex-auto p-6" style="padding:30px">

                    <form action="{{url('/create')}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nombre: </label>
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" style=" border: 1px solid black">
                        </div>

                        <div class="form-group">
                            <label for="price">Precio: </label>
                            <input type="text" name="price" id="price" class="form-control" value="{{old('price')}}" style=" border: 1px solid black">
                        </div>

                        <div class="form-group">
                            <label for="photo">Foto: </label>
                            <input type="text" name="photo" id="photo" class="form-control" value="{{old('photo')}}" style=" border: 1px solid black">
                        </div>

                        <div class="form-group">
                            <label for="poster">Poster</label>
                            <input type="text" name="poster" id="poster" class="form-control" value="{{old('poster')}}" style=" border: 1px solid black">
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-orange-400 text-white hover:bg-orange-500">
                                Añadir película
                            </button>
                        </div>

                        {{-- TODO: Cerrar formulario --}}
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
