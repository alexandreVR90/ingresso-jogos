<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Bem-vindo ao Ingresso Jogos!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <p class="text-gray-900 dark:text-gray-100">
                    Compre ingressos para seus jogos favoritos de forma rápida e segura.
                </p>

                <h3 class="mt-6 mb-4 text-lg font-semibold text-gray-900 dark:text-gray-100">Próximos Jogos</h3>
                <div class="space-y-2">
                    @forelse($games as $game)
                        <a href="{{ route('games.show', $game->id) }}" 
                           class="block p-4 bg-gray-100 dark:bg-gray-700 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-900 dark:text-gray-100">
                            <strong>{{ $game->title }}</strong> - {{ $game->date->format('d/m/Y H:i') }}
                        </a>
                    @empty
                        <p class="text-gray-900 dark:text-gray-100">Nenhum jogo cadastrado no momento.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>