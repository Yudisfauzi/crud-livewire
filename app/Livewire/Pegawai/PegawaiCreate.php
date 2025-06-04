<?php

namespace App\Livewire\Pegawai;

use Livewire\Component;

class PegawaiCreate extends Component
{
    public $nama, $jabatan, $gaji, $jenis_kelamin, $alamat;
    public function render()
    {
        return view('livewire.pegawai.pegawai-create');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'gaji' => 'required|numeric|min:0',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:255',
        ]);

        Pegawai::create([
            'nama' => $this->name,
            'jabatan' => $this->jabatan,
            'gaji' => $this->gaji,
            'jenis_kelamin' => $this->jenis_kelamin,
            'alamat' => $this->alamat,
        ]);

        return to_route('pegawai.index')->with('success', 'Pegawai created successfully.');
    }
}
