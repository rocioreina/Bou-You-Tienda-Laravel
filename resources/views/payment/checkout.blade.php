@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-gray-200">
                        <h3 class="text-xl font-bold" style="margin-bottom: 10px;">Formulario de pago</h3>
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
                    <div class="card-body">
                        <form action="{{ route('payment.process') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direccion" id="direccion" value="{{ old('direccion') }}" class="form-control border border-gray-300 rounded-md py-2 px-4" required>
                            </div>
                            <div class="form-group">
                                <label for="numero_calle">Número de calle:</label>
                                <input type="text" name="numero_calle" id="numero_calle" value="{{ old('numero_calle') }}" class="form-control border border-gray-300 rounded-md py-2 px-4" required>
                            </div>
                            <div class="form-group">
                                <label for="codigo_postal">Código Postal:</label>
                                <input type="number" name="codigo_postal" id="codigo_postal" value="{{ old('codigo_postal') }}" class="form-control border border-gray-300 rounded-md py-2 px-4" required>
                            </div>
                            <div class="form-group">
                                <label for="piso">Piso:</label>
                                <input type="text" name="piso" id="piso" value="{{ old('piso') }}" class="form-control border border-gray-300 rounded-md py-2 px-4" required>
                            </div>
                            <div class="form-group">
                                <label for="municipio">Municipio:</label>
                                <input type="text" name="municipio" id="municipio" value="{{ old('municipio') }}" class="form-control border border-gray-300 rounded-md py-2 px-4" required>
                            </div>
                            <div class="form-group">
                                <label for="provincia">Provincia:</label>
                                <input type="text" name="provincia" id="provincia" value="{{ old('provincia') }}" class="form-control border border-gray-300 rounded-md py-2 px-4" required>
                            </div>

                            <div class="form-group">
                                <label for="card_number">Número de tarjeta:</label>
                                <input type="number" name="card_number" id="card_number" value="{{ old('card_number') }}" class="form-control border border-gray-300 rounded-md py-2 px-4" required>
                            </div>

                            <div class="form-group">
                                <label for="cardholder_name">Nombre del titular:</label>
                                <input type="text" name="cardholder_name" id="cardholder_name" value="{{ old('cardholder_name') }}" class="form-control border border-gray-300 rounded-md py-2 px-4" required>
                            </div>

                            <div class="form-group">
                                <label for="expiry_date">Fecha de expiración:</label>
                                <input type="text" name="expiry_date" placeholder="mm/yy" id="expiry_date" value="{{ old('expiry_date') }}" class="form-control border border-gray-300 rounded-md py-2 px-4" required>
                            </div>

                            <div class="form-group">
                                <label for="cvv">CVV:</label>
                                <input type="number" name="cvv" id="cvv" value="{{ old('cvv') }}" class="form-control border border-gray-300 rounded-md py-2 px-4" required>
                            </div>

                            <button type="submit" class="inline-block text-center px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-lg active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo">Pagar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
