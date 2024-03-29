<nav class="relative flex flex-wrap items-center content-between py-3 px-4  text-black bg-gray-100">
    <div class="container mx-auto sm:px-4 flex flex-row justify-between">
        <a class="inline-block pt-1 pb-1 text-lg whitespace-no-wrap" href="/" style="color:#777; width: 10vw">
            <img src="{{ asset('images/bouandyou.png') }}" style="height: 80pt;">
        </a>


            <div class="grid grid-cols-2 items-center w-full" id="navbarSupportedContent">
                <ul class="flex flex-wrap list-reset pl-0 mb-0">
                    <li class=" {{  Request::is('category/accesories') ? 'active' : ''}}">
                        <a class="inline-flex py-2 px-4 no-underline" href="{{url('category/accesories')}}">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                           </svg>
                           Accesorios
                        </a>
                    </li>
                    <li class=" {{  Request::is('category/clothes') ? 'active' : ''}}">
                        <a class="inline-flex py-2 px-4 no-underline" href="{{url('category/clothes')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            Ropa
                        </a>
                    </li>
                    <li class=" {{  Request::is('category/shoes') ? 'active' : ''}}">
                        <a class="inline-flex py-2 px-4 no-underline" href="{{url('category/shoes')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                            Calzado
                        </a>
                    </li>
                    @if(Auth::check() && Auth::user()->role == 'admin')
                        <li class="{{ Request::is('catalog/add') ? 'active' : ''}}">
                            <a class="inline-flex items-center py-2 px-4 no-underline" href="{{url('catalog/add')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                                <span>Añadir artículo</span>
                            </a>
                        </li>
                    @endif

                </ul>


                <ul class="flex flex-wrap list-reset pl-0 mb-0 justify-self-end">
                    @if(Auth::check() )
                        <li class="{{ Request::is('cart') ? 'active' : '' }}">
                            <a class="inline-flex items-center py-2 px-4 no-underline" href="{{ url('cart') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                                Carrito
                            </a>
                        </li>

                        <li class=" {{  Request::is('favorites') ? 'active' : ''}}">
                            <a class="inline-flex items-center py-2 px-4 no-underline" href="{{url('favorites')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Favorito
                            </a>
                        </li>
                    @endif
                    <li class="">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="inline-flex align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline font-normal text-blue-700 bg-transparent inline-block py-2 px-4 no-underline" style="display:inline;cursor:pointer">
                                @if( Auth::check() )
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M22 10.5h-6m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                    </svg>
                                   <!-- logout -->
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <!-- login -->
                                @endif
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
    </div>
</nav>
