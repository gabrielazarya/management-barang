<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pariwisata</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    @include('includes.navbar')

    <div class="container">
        @yield('content')
    </div>

    <div class="container">
        @yield('tentang')
    </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
