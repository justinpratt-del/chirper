@props(['chirp'])

<div class="card bg-base-100 shadow mb-4">
    <div class="card-body">
        <div class="flex items-center gap-3 mb-2">
            @if($chirp->user)
                <img
                    src="https://avatars.laravel.cloud/{{ $chirp->user->email }}"
                    alt="{{ $chirp->user->name }}"
                    class="w-10 h-10 rounded-full"
                />
                <div>
                    <p class="font-bold">{{ $chirp->user->name }}</p>
                    <p class="text-xs text-gray-500">{{ $chirp->created_at->diffForHumans() }}</p>
                </div>
            @else
                <img
                    src="https://avatars.laravel.cloud/anonymous"
                    alt="Anonymous"
                    class="w-10 h-10 rounded-full"
                />
                <div>
                    <p class="font-bold">Anonymous</p>
                    <p class="text-xs text-gray-500">{{ $chirp->created_at->diffForHumans() }}</p>
                </div>
            @endif
        </div>
        <p>{{ $chirp->message }}</p>
    </div>
</div>
