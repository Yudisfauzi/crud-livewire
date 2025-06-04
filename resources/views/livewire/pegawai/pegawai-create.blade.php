<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Data') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('tambahkan user') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>
        <a href="{{ route('pegawai.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kembali</a>
        
        <div class="relative pt-5">
            <form wire:submit.prevent="submit" class="mt-4 space-y-6 gap-4">
                <flux:input wire:model="name" label="Name" placeholder="name" />
                <flux:input wire:model="jabatan" label="Jabatan" placeholder="jabatan" />
                <flux:input wire:model="gaji" label="Gaji" type="number" placeholder="gaji" />
                <div>
                    <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                    <select wire:model="jenis_kelamin" id="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jenis_kelamin') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <flux:input wire:model="alamat" label="Alamat" placeholder="Alamat lengkap" />
                
                <flux:button wire:loading.attr="disabled" type="submit" variant="primary">
                    Submit
                </flux:button>
            </form>
        </div>
    </div>
</div>
