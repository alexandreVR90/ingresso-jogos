@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-800 rounded shadow">
    <h1 class="text-2xl font-bold mb-6 text-gray-900 dark:text-gray-100">Criar Novo Jogo</h1>

    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-100 text-red-800 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.games.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50" />
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Descrição</label>
            <textarea name="description" id="description" rows="4"
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Data</label>
            <input type="date" name="date" id="date" value="{{ old('date') }}" required
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50" />
        </div>

        <div>
            <label for="location" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Local</label>
            <input type="text" name="location" id="location" value="{{ old('location') }}" required
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50" />
        </div>

        <div>
            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Salvar Jogo
            </button>
        </div>
    </form>
</div>
@endsection
