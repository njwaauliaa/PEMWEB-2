<?php

namespace App\Livewire\UnitKerja;

use App\Models\UnitKerja;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ListUnitKerja extends Component
{
    #[Validate('required|string|max:10')]
    public string $kode = '';
    #[Validate('required|string|max:100')]
    public $nama = '';

    public function save()
    {
        $this->validate();
        Ruang::create([
        'kode' => $this->kode,
        'nama' => $this->nama,
    ]);
    session()->flash('message', 'Unit Kerja berhasil dihapus.');

    $this->redirectRoute('unit_kerja.index');
    }

    public function render()
    {
        return view('livewire.unit-kerja.list-unit-kerja', [
            'unit_kerjas' => UnitKerja::all(),
        ]);
    }
}