<nav class="bg-[#f05454] border-gray-200 dark:bg-gray-900">
    <div class="w-full flex items-center justify-between mx-auto p-4">
        <!-- Contenedor para la imagen en la esquina izquierda -->
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/cruz-roja-logo.jpeg') }}" class="h-[4rem]" alt="Flowbite Logo">
        </div>
        
        <div class="flex flex-grow items-center justify-center space-x-3">
            <h2 class="text-black font-bold text-xl">VALES DE COMBUSTIBLE</h2>
            <img src="{{ asset('img/gas-station_icon.png') }}" alt="Gasolinera" class="w-7 h-7">
        </div>
        




<!-- Right Side Of Navbar -->
<ul class="navbar-nav ms-auto">
    <!-- Authentication Links -->
    @guest
        @if (Route::has('login'))
        
        <button type="button" class="text-white bg-[#30475e] hover:bg-[#465f79] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"> <a href="{{ route('login') }}">{{ __('Login') }}
        </a></button>
        @endif


        
    @else

    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white  bg-[#30475e] hover:bg-[#465f79]  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a> <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
</svg>
</button>

<!-- Dropdown menu -->
<div id="dropdown" class=" border border-blue-300 bg-[#30475e] hover:bg-[#465f79] z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class=" py-1 text-sm text-white rounded-lg bg-[#30475e]  dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a class=" block px-4 py-2 hover:bg-[#465f79]  dark:hover:bg-gray-600 dark:hover:text-white" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

               
      </li>
      
    </ul>
    
</div>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
    @endguest
</ul>
    </div>
    
</nav>
