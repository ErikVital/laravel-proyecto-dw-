<nav>
    <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
         <i class="fa-solid fa-bars"></i>
        </label>
    <a href="#" class="enlace">
         <img src="assets/Plantillas/menu/logo.png" alt="" class="logo">
    </a>
    <ul>
        <li><a class="@yield('menu-inicio')" href="{{ route('index') }}">Inicio</a></li>
        <li><a class="@yield('menu-cocina')" href="{{ route('cocina') }}">Cocina</a></li>
        <li><a class="@yield('menu-nosotros')" href="{{ route('nosotros') }}">Nosotros</a></li>
        <li><a class="@yield('menu-servicios')" href="{{ route('servicios')}}">Servicios</a></li>
        <li><a class="@yield('menu-lugares')" href="{{ route('lugares') }}">Lugares</a></li>
        <li><a class="@yield('menu-contacto')" href="{{ route('contacto') }}">Contacto</a></li>
    </ul>
</nav>