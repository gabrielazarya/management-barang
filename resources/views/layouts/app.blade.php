<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Peminjaman Barang Logistik Telkom University Surabaya</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/logo-icon.png') }}" type="image/x-icon">

</head>
<body>

    @include('includes.navbar')
            
    @yield('content')

    @include('includes.footer')
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
