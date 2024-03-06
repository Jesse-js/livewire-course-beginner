<div>
    <form action="">
        <input type="text" wire:model="name" placeholder="ex.: John Doe">
        <input type="email" wire:model="email" id="" placeholder="ex.: johndoe@foobar.com">
        <input type="password" wire:model="password" id="" placeholder="password">
        <button wire:click.prevent="createNewUser">Create</button>
    </form>

    <hr>

    @forelse ($users as $user)
        <h3>{{ $user->name }}</h3>
    @empty
        <p>There are no users</p>
    @endforelse
</div>
