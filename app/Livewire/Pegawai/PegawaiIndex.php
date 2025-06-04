<?php

namespace App\Livewire\Pegawai;

use App\Models\Pegawai;
use Livewire\Component;

class PegawaiIndex extends Component
{
    public function render()
    {
        $pegawai = Pegawai::get();
        
        return view('livewire.pegawai.pegawai-index', compact('pegawai'));
    }
}
