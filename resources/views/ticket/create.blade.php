<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('ticket.index') }}">Tickets</a>
        </h2>
    </x-slot>
        <form action="{{ route('ticket.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                    titre
                </label>
                <input type="text" name="titre" id="titre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name') }}">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">
                    Description
                </label>
                <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="3">{{ old('description') }}</textarea>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-indigo-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Enregistrer
                </button>
            </div>
        </form>

    
</x-app-layout>