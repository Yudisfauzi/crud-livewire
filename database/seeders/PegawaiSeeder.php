<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nama' => 'Budi',
            'jabatan' => 'Kepala Sekolah',
            'gaji' => '1000000',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Raya, No. 1',
        ]);
    }
}
