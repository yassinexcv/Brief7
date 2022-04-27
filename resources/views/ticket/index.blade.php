<x-app-layout>
  @foreach ($tickets as $ticket)
    <div>
      <h1>
        {{ $ticket->titre }}
      </h1>
      <p>
        {{ $ticket->description }}
      </p>
    </div>
  @endforeach
</x-app-layout>