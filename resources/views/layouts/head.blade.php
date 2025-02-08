<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<meta name="author" content="Javier Orlando Cruz Quintero" />
<meta name="copyright" content="Aeropuerto Internacional Felipe Ángeles" />
<title>@yield('title', 'Buzón Interno')</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<!--CDN de Jquery Version 3.7.1-->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<!--CDN de SweetAlert2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Sección opcional para incluir scripts adicionales -->
<!-- Icono de la pestaña -->
<link rel="icon" href="{{ asset('images/AIFA_icono.png') }}" type="image/png">
@yield('head-scripts')
