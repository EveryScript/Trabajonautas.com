<form class="text-black" wire:submit="save">
    <input class="p-2" type="text" wire:model="company_name">
    <div>
        @error('company_name')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <input class="p-2" type="text" wire:model="company_type">
    <div>
        @error('company_type')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <input class="p-2" type="text" wire:model="description">
    <div>
        @error('description')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <button class="bg-pink-500 text-white p-2" type="submit">Save</button>
</form>
