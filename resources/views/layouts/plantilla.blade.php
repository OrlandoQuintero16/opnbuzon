<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts.head')
</head>

<body class="font-sans text-gray-900 antialiased bg-gray-100 dark:bg-gray-900 dark:text-gray-200">
    
    @include('layouts.navbar')

    <main class="min-h-screen flex flex-col m-4 ">
        @yield('content')
    </main>

    @include('layouts.footer')
    @yield('scripts')
</body>

</html>