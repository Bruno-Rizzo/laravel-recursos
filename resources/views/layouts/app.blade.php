<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Recursos</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/css/all.min.css')}}">
</head>
<body style="background-color: #EEE">

    @include('layouts.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('sweetalert::alert')

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
