<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create Peminjaman</h1>

    <form wire:submit.prevent="save" class="space-y-4">
        <flux:select
            id="ruang_id"
            wire:model.defer="ruang_id"
            label="Ruang"
            placeholder="Pilih Ruang"
            required
            >
            
            @foreach ($ruangs as $ruang)
            <flux:select.option value="{{$ruang->id}}" >
                {{ $ruang->nama }}
            </flux:select.option>
            @endforeach
        </flux:select>  

        <flux:select
            id="pegawai_id"
            wire:model.defer="pegawai_id"
            label="Pegawai"
            placeholder="Pilih Pegawai"
            required
            >
            @foreach ($pegawais as $pegawai)
            <flux:select.option value="{{$pegawai->id}}" >
                {{ $pegawai->nama }}
            </flux:select.option>
            @endforeach
        </flux:select>

            <flux:input
            type="date"
            id="tanggal"
            wire:model.defer="tanggal"
            label="Tanggal Peminjaman"
            placeholder="Masukkan Tanggal Peminjaman"
            required
            />

            <flux:input
            type="time"
            id="jam"
            wire:model.defer="jam"
            label="Jam Mulai"
            placeholder="Masukkan Jam Mulai"
            required
            />

            <flux:input
            type="time"
            id="jam"
            wire:model.defer="jam"
            label="Jam Akhir"
            placeholder="Masukkan Jam Akhir"
            required
            />

        <flux:select
            id="keterangan"
            wire:model.defer="keterangan"
            label="Keterangan Peminjaman"
            placeholder="Pilih Keterangan Peminjaman"
            required
            >
            <flux:select.option value="presentasi produk">Presentasi Produk</flux:select.option>
            <flux:select.option value="tidak tersedia">Diskusi Proyek</flux:select.option>
            <flux:select.option value="rapat strategi">Rapat Strategi</flux:select.option>
            <flux:select.option value="koordinasi tim">Koordinasi Tim</flux:select.option>
            <flux:select.option value="rapat anggaran">Rapat Anggaran</flux:select.option>
        </flux:select>

        <flux:button
            type="submit"
            variant="primary"
            >
            Save
        </flux:button>
    </form>
</div>