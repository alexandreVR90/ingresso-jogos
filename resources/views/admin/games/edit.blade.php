@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-900 dark:text-gray-100">Editar jogo</h1>

    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-100 text-red-800 rounded-md">
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.games.update', $game) }}" method="POST" class="space-y-6 bg-white dark:bg-gray-800 p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título <span class="text-red-500">*</span></label>
            <input type="text" name="title" id="title" value="{{ old('title', $game->title) }}" required
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Descrição</label>
            <textarea name="description" id="description" rows="3"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">{{ old('description', $game->description) }}</textarea>
        </div>

        <div>
            <label for="date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Data <span class="text-red-500">*</span></label>
            <input type="date" name="date" id="date" value="{{ old('date', $game->date->format('Y-m-d')) }}" required
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
        </div>

        <div>
            <label for="location" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Local <span class="text-red-500">*</span></label>
            <input type="text" name="location" id="location" value="{{ old('location', $game->location) }}" required
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
        </div>

        <div class="flex items-center justify-between">
            <a href="{{ route('admin.games.index') }}" class="text-gray-600 dark:text-gray-300 hover:underline">Cancelar</a>
            <button type="submit" class="px-6 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700 transition">Atualizar</button>
        </div>
    </form>
</div>
@endsection
