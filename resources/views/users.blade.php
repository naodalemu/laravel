<x-layout>
    <x-slot:heading>
        Users
    </x-slot:heading>
    <ul>
        @foreach ($users as $user)
            <a href="/users/{{$user['id']}}">
                <li class=" bg-white p-5 my-5 rounded-lg cursor-pointer active:bg-gray-200 hover:bg-gray-300 flex xs:flex-col md:flex-row  ">
                    <div class="md:w-1/4 sm:w-full">
                        <h2 class="mb-1 font-bold">{{ $user['name'] }}</h2>
                        <h3>{{ $user['email'] }}</h3>
                    </div>
                </li>
            </a>
        @endforeach
    </ul>
</x-layout>