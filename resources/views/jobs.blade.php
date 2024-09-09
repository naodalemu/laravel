<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}">
                <li class=" bg-white p-5 my-10 rounded-lg cursor-pointer active:scale-95 hover:bg-gray-800 hover:text-white ">
                    <h2 class="mb-1 font-bold">{{ $job['title'] }}</h2>
                    <h3 class="">{{ $job['salary'] }}</h3>
                </li>
            </a>
        @endforeach
    </ul>
</x-layout>