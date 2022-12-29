<div>
    <form wire:submit.prevent='submit' action="">
        <input type="text" name="name" wire:model='name'><br>
        @error('name')
            <p  class="error">{{ $message }}</p>
        @enderror
        <input type="text" name="email" wire:model='email'><br>
        @error('email')
            <p  class="error">{{ $message }}</p>
        @enderror
        <button type="submit">Submit</button>
    </form>
</div>
