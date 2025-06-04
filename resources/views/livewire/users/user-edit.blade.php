<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Edit your user') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>
        <a href="{{ route('users.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kembali</a>
        
        <div class="relative pt-5">
            <form wire:submit.prevent="submit" class="mt-4 space-y-6 gap-4">
                <flux:input wire:model="name" label="Name" placeholder="name" />
                <flux:input wire:model="email" label="Email" placeholder="email" />
                <flux:input wire:model="password" label="Password" type="password" placeholder="password" />
                <flux:input wire:model="confirm_password" label="Confirm Password" type="password" placeholder="confirm password" />
                
                <flux:button wire:loading.attr="disabled" type="submit" variant="primary">
                    Submit
                </flux:button>
            </form>
        </div>
    </div>
</div>
