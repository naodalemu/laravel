<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}">
                <li class=" bg-white p-5 my-5 rounded-lg cursor-pointer active:bg-gray-200 hover:bg-gray-300 flex xs:flex-col md:flex-row  ">
                    <div class="md:w-1/4 sm:w-full sm:mb-5">
                        <h2 class="mb-1 font-bold">{{ $job['title'] }}</h2>
                        <h3 class="">{{ $job['salary'] }}</h3>
                    </div>
                    <p class="md:w-3/4 sm:w-full">{{ $job['detail'] }}</p>
                </li>
            </a>
        @endforeach
    </ul>
</x-layout>