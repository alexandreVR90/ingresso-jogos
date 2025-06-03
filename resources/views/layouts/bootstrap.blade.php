<!DOCTYPE html>
<html lang="pt-BR" class="bg-dark text-light">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Ingresso Jogos')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
      .bg-black {
        background-color: #000 !important;
      }
    </style>
</head>
<body class="bg-dark text-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Ingresso Jogos</a>
            <div>
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-light me-2">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-outline-light">Sair</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Entrar</a>
                    <a href="{{ route('register') }}" class="btn btn-light text-dark">Registrar</a>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
