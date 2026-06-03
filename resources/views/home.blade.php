<x-layout>
    <x-slot:title>Welcome</x-slot:title>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-6">Latest Chirps</h1>

        <div class="card bg-base-100 shadow mb-6">
            <div class="card-body">
                <form action="/chirps" method="POST">
                    @csrf
                    <div class="form-control">
                        <textarea
                            name="message"
                            class="textarea textarea-bordered w-full {{ $errors->has('message') ? 'textarea-error' : '' }}"
                            placeholder="What's on your mind?"
                            maxlength="255"
                            required
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary btn-sm">Chirp!</button>
                    </div>
                </form>
            </div>
        </div>

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
