<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Movies</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CSS PROPRIO -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- LIVEWIRE STYLES -->
    @livewireStyles
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" type="image/x-icon">

</head>
<body class="bg-dark">
    <header>
        @include('layouts.nav')
    </header>

    <main>
        @yield('content')
    </main>

    
    <footer class="bg-dark text-center text-white">

        @include('layouts.footer')

        <!-- SCRIPTS -->

        @yield('scripts')

        <!-- BOOTSTRAP JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- LIVEWIRE SCRIPTS -->
        @livewireScripts
        <!-- ALPINE JS -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </footer>
</body>
</html>