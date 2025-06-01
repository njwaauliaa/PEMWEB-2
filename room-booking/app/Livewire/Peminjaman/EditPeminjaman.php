<?php

namespace App\Livewire\Peminjaman;

use App\Models\Peminjaman;
use Livewire\Component;
use Livewire\Attributes\Validate;

class EditPeminjaman extends Component
{
    #[Validate('required|string|max:10')]
    public string $ruang_id = '';
    #[Validate('required|string|max:10')]
    public $pegawai_id = '';
    #[Validate('required|string|max:50')]
    public $tanggal = '';
    #[Validate('required|string|max:50')]
    public $jam_mulai = '';
    #[Validate('required|string|max:50')]
    public $jam_akhir = '';
    #[Validate('required|string|max:100')]
    public $keterangan = '';

    public function save()
    {
        $this->validate();
        Pegawai::create([
        'ruang id' => $this->ruang_id,
        'pegawai id' => $this->pegawai_id,
        'tanggal' => $this->tanggal,
        'jam mulai' => $this->jam_mulai,
        'jam akhir' => $this->jam_akhir,
        'keterangan' => $this->keterangan,
    ]);
    session()->flash('message', 'Peminjaman berhasil diperbarui.');

    $this->redirectRoute('peminjaman.index');
    }

    public function render()
    {
        return view('livewire.peminjaman.edit-peminjaman');
    }
}