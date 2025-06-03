@extends('layouts.bootstrap')

@section('title', 'Página Inicial')

@section('content')
    <h1 class="mb-4">Bem-vindo ao Ingresso Jogos!</h1>
    <p>Compre ingressos para seus jogos favoritos de forma rápida e segura.</p>

    <h2 class="mt-5">Próximos Jogos</h2>
    <div class="list-group">
        @forelse($games as $game)
            <a href="{{ route('games.show', $game->id) }}" class="list-group-item list-group-item-action bg-dark text-light">
                <strong>{{ $game->title }}</strong> - {{ $game->date->format('d/m/Y H:i') }}
            </a>
        @empty
            <p>Nenhum jogo cadastrado no momento.</p>
        @endforelse
    </div>
@endsection
