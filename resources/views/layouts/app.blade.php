<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color: blue;
        }
    </style>
    
    <title>@yield('title', 'Application')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="http://ensak.usms.ac.ma/ensak/wp-content/uploads/2020/01/LOGO-ENSAK-800.png" alt="Logo" style="height: 80px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                
                    <a class="nav-link" href="{{ route('concours.index') }}">Concours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('candidates.index') }}">Candidats</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
