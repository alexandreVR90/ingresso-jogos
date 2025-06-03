<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white h-screen shadow-md">
            <div class="p-4 text-2xl font-bold">Painel Admin</div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li><a href="/admin" class="block p-2 hover:bg-gray-200 rounded">Dashboard</a></li>
                    <li><a href="/admin/jogos" class="block p-2 hover:bg-gray-200 rounded">Jogos</a></li>
                    <li><a href="/admin/lotes" class="block p-2 hover:bg-gray-200 rounded">Lotes</a></li>
                    <li><a href="/admin/vendas" class="block p-2 hover:bg-gray-200 rounded">Vendas</a></li>
                    <li><a href="/admin/relatorios" class="block p-2 hover:bg-gray-200 rounded">Relatórios</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main -->
        <main class="flex-1 p-6">
            <h1 class="text-3xl mb-4">@yield('title')</h1>
            @yield('content')
        </main>
    </div>
</body>
</html>
