<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('ticket.index') }}">Tickets</a>
        </h2>
    </x-slot>
    <div>
        <h1>
            {{ $ticket->titre }}
        </h1>
        <p>
            {{ $ticket->description }}
        </p>

    </div>
    <div>
        <button>
            <a href="{{ route('ticket.edit', $ticket->id) }}">
                Modifier
            </a>
        </button>
    </div>

</x-app-layout>
