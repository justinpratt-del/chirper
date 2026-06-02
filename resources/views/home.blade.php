<x-layout>
    <x-slot:title>Welcome</x-slot:title>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-6">Latest Chirps</h1>

        @foreach ($chirps as $chirp)
            <div class="card bg-base-100 shadow mb-4">
                <div class="card-body">
                    <p class="font-bold">{{ $chirp['author'] }}</p>
                    <p>{{ $chirp['message'] }}</p>
                    <p class="text-sm text-gray-500">{{ $chirp['time'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
