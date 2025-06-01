<?php

namespace App\Livewire\Peminjaman;

use App\Models\Peminjaman;
use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Ruang;
use App\Models\Pegawai;

class CreatePeminjaman extends Component
{
    #[Validate('required|int')]
    public string $ruang_id = '';
    #[Validate('required|int')]
    public $pegawai_id = '';
    #[Validate('required|date')]
    public $tanggal = '';
    #[Validate('required|time')]
    public $jam_mulai = '';
    #[Validate('required|time')]
    public $jam_akhir = '';
    #[Validate('required|string|max:100')]
    public $keterangan = '';

    public function save()
    {
        $this->validate();
        Pegawai::create([
        'ruang_id' => $this->ruang_id,
        'pegawai_id' => $this->pegawai_id,
        'tanggal' => $this->tanggal,
        'jam_mulai' => $this->jam_mulai,
        'jam_akhir' => $this->jam_akhir,
        'keterangan' => $this->keterangan,
    ]);
    session()->flash('message', 'Peminjaman berhasil ditambahkan.');

    $this->redirectRoute('peminjaman.index');
    }

    public function render()
    {
        $ruangs = Ruang::all();
        $pegawais = Pegawai::all();
        return view('livewire.peminjaman.create-peminjaman', compact('ruangs', 'pegawais'));
    }
}