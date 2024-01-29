<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Bou & You</title>
</head>
<body>
@extends("layouts.master")

@section("content")
    <div class="flex flex-wrap">
        @foreach( $items as $item )
            <div class="sm:w-1/2 pr-4 pl-4 sm:w-1/3 pr-4 pl-4 md:w-1/4 pr-4 pl-4 text-center">
                <a href="{{ url('/show/' . $item->id) }}" class="flex flex-col items-center justify-center">
                    <img src="{{ $item->photo }}" class="border border-gray-300" alt="poster {{ $item->name }}" />
                    <h4 class="min-h-45px mt-5 mb-3">
                        <span class="block">{{ $item->name }}</span>
                        <span class="block">{{ $item->price }}€</span>
                    </h4>
                </a>
            </div>
        @endforeach
    </div>
    <div class="flex justify-end mt-5 pagination">
        {{ $items->links() }}
    </div>
        <footer class="bg-gray-200 text-black py-8 mt-20">
            <div class="container-fluid">
                <div class="flex flex-wrap justify-between">
                    <div class="w-full md:w-1/2 lg:w-1/4 pl-14">
                        <h4 class="text-lg font-bold mb-4">Atención al cliente</h4>
                        <ul class="text-sm">
                            <li><a href="#" class="hover:text-gray-400">Contacto</a></li>
                            <li><a href="#" class="hover:text-gray-400">Preguntas frecuentes</a></li>
                            <li><a href="#" class="hover:text-gray-400">Envíos y devoluciones</a></li>
                            <li><a href="#" class="hover:text-gray-400">Términos y condiciones</a></li>
                            <li><a href="#" class="hover:text-gray-400">Política de privacidad</a></li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/3 lg:w-1/4">
                        <h4 class="text-lg font-bold mb-4">Síguenos</h4>
                        <ul class="text-sm">
                            <li><a href="https://es-es.facebook.com/login/device-based/regular/login/?login_attempt=1" class="hover:text-gray-400">Facebook</a></li>
                            <li><a href="https://www.instagram.com/accounts/login/" class="hover:text-gray-400">Instagram</a></li>
                            <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZXMifQ%3D%3D%22%7D" class="hover:text-gray-400">Twitter</a></li>
                            <li><a href="https://www.pinterest.es/login/" class="hover:text-gray-400">Pinterest</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="border-gray-800 my-8">
                <div class="flex justify-between items-center">
                    <div class="text-sm pl-14">© 2023 Bou & You. Todos los derechos reservados.</div>
                    <div>
                        <img src="{{ asset('images/bouandyou.png') }}" style="height: 80pt;" alt="Logo" class="h-8">
                    </div>
                </div>
            </div>
        </footer>


@endsection
</body>
</html>

