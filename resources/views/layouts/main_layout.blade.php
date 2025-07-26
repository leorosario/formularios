<!DOCTYPE html>
<html>
<head>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
</head>
<body>
    
    <section class="content">
        @yield('content')
    </section>

    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
