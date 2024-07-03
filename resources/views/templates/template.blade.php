<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>SINAJUVE 1.0</title>
</head>
<body class="col-lg-8 mx-auto p-4 py-md-5">

    <nav>
        @include('layout.navbar')
    </nav>

    <section>
        @yield('content')
    </section>

    <footer>
        @include('layout.footer')
    </footer>

</body>
</html>