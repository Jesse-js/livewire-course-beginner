<div>
    <form action="">
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" type="text" wire:model="name" placeholder="ex.: John Doe">
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" type="email" wire:model="email" placeholder="ex.: johndoe@foobar.com">
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" type="password" wire:model="password" placeholder="password">
        <button class="block rounded px-3 py-1 bg-gray-400 text-white" wire:click.prevent="createNewUser">Create</button>
    </form>

    <hr>

    @forelse ($users as $user)
        <h3>{{ $user->name }}</h3>
    @empty
        <p>There are no users</p>
    @endforelse
</div>
