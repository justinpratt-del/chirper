<x-layout>
    <x-slot:title>Welcome</x-slot:title>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-6">Latest Chirps</h1>

        @forelse ($chirps as $chirp)
            <x-chirp :chirp="$chirp" />
        @empty
            <div class="card bg-base-100 shadow mb-4">
                <div class="card-body">
                    <p class="text-gray-500">No chirps yet. Be the first to chirp!</p>
                </div>
            </div>
        @endforelse
    </div>
</x-layout>
