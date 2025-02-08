<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Javier Orlando Cruz Quintero" />
    <meta name="copyright" content="Aeropuerto Internacional Felipe Ángeles" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Buzón Interno Direccion de Operaciones')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('images/AIFA_icono.png') }}" type="image/png">
</head>

<body
    class="font-sans text-gray-900 antialiased bg-gray-100 dark:bg-gray-900 dark:text-gray-200 flex flex-col min-h-screen">
    @include('layouts.navbar') <!-- Barra de navegación -->

    <!-- Contenedor principal -->
    <div class="flex flex-col flex-grow justify-center items-center px-4 md:px-0 py-6 md:py-12 ">
        <div class="w-full sm:max-w-md px-6 py-4 bg-white dark:bg-gray-800 shadow-lg overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
