<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Pegawai') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage your Pegawai') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    <div>
        @session('success')
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
            <span class="block sm:inline">{{ $value }}</span>
        </div>
            
        @endsession
            <a href="{{ route('pegawai.create') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Data</a>
        <div class="pt-6">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Nama Lengkap</th>
                    <th scope="col" class="px-6 py-3">Jabatan</th>
                    <th scope="col" class="px-6 py-3">Gaji</th>
                    <th scope="col" class="px-6 py-3">Jenis Kelamin</th>
                    <th scope="col" class="px-6 py-3">Alamat</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawai as $employee)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                            <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{ $employee->id }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $employee->nama }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $employee->jabatan }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $employee->gaji }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $employee->jenis_kelamin }}</td>
                            <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $employee->alamat }}</td>
                            <td class="px-6 py-2">
                                <a href="" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-600 hover:bg-blue-700 rounded">
                                Edit
                                </a>
                                <button wire:click="" wire:confirm="Are you sure you want to delete this user?" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-red-600 hover:bg-red-700 rounded ml-2">
                                Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>