<div>
    @if(session('success'))
        <span class="px-100 py-3 bg-green-600 text-white rounded">{{ session('success') }}</span>
    @endif
    <form action="">
        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" type="text" wire:model="name" placeholder="ex.: John Doe">
        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        
        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" type="email" wire:model="email" placeholder="ex.: johndoe@foobar.com">
        @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mt-2" type="password" wire:model="password" placeholder="password">
        @error('password')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <button class="block rounded px-3 py-1 bg-gray-400 text-white mt-3" wire:click.prevent="createNewUser">Create</button>
    </form>

    <hr>

    @forelse ($users as $user)
        <h3>{{ $user->name }}</h3>
    @empty
        <p>There are no users</p>
    @endforelse
</div>
