<x-layout>
    <x-slot:heading>
        <a href="/users">Users</a> > {{ $user['name'] }}
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $user['name'] }}</h2>
    <h3 class="mb-5">{{ $user['email'] }}</h3>
</x-layout>