<!DOCTYPE html>
<html>
<head>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Formulários</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>          
            </div>              
            <form class="d-flex ms-auto me-3" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Sair</button>
            </form>            
            
            </div>
        </div>
    </nav>
    
    <section class="content">
        @yield('content')
    </section>

    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
