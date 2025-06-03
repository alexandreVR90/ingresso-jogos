@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-900 dark:text-gray-100">Jogos</h1>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.games.create') }}" 
       class="inline-block mb-4 px-5 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
       + Criar novo jogo
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white dark:bg-gray-800 rounded-lg shadow divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Título</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Data</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Local</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach($games as $game)
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-900">
                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $game->title }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $game->date->format('d/m/Y') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">{{ $game->location }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center space-x-2">
                        <a href="{{ route('admin.games.show', $game) }}" 
                           class="text-indigo-600 hover:text-indigo-900 font-semibold">Ver</a>
                        <a href="{{ route('admin.games.edit', $game) }}" 
                           class="text-yellow-600 hover:text-yellow-900 font-semibold">Editar</a>
                        <form action="{{ route('admin.games.destroy', $game) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja excluir este jogo?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $games->links() }}
    </div>
</div>
@endsection
