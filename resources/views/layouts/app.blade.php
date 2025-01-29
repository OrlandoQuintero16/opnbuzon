<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts.head')
</head>

<body class="antialiased">
    
    @include('layouts.navbar')

    <main class="min-h-screen flex flex-col m-4 ">
        @yield('content')
    </main>

    @include('layouts.footer')
    @yield('scripts')
</body>

</html>