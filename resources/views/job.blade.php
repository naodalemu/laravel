<x-layout>
    <x-slot:heading>
        <a href="/jobs">Jobs</a>/{{ $job['title'] }}
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <h3>This job pays ${{ $job['salary'] }} annually</h3>
</x-layout>