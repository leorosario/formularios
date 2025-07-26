<!DOCTYPE html>
<html>
<head>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">        
    <div id="app">        
        <example-component></example-component>
    </div>

    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>