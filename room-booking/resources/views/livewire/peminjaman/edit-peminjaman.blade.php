<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create Peminjaman</h1>

    <form wire:submit.prevent="save" class="space-y-4">
       <flux:input
            type="text"
            id="kode"
            wire:model.defer="kode"
            label="Ruang ID"
            placeholder="Masukkan Ruang ID"
            required
            />

        <flux:input
            type="text"
            id="kode"
            wire:model.defer="kode"
            label="Kode Pegawai"
            placeholder="Masukkan Kode Pegawai ID"
            required
            />

            <flux:input
            type="text"
            id="kode"
            wire:model.defer="kode"
            label="Kode Pegawai"
            placeholder="Masukkan Kode Pegawai"
            required
            />

            <flux:input
            type="text"
            id="tanggal"
            wire:model.defer="tanggal"
            label="Tanggal Peminjaman"
            placeholder="Masukkan Tanggal Peminjaman"
            required
            />

            <flux:input
            type="text"
            id="jam"
            wire:model.defer="jam"
            label="Jam Mulai"
            placeholder="Masukkan Jam Mulai"
            required
            />

            <flux:input
            type="text"
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
            <flux:select.option value="diskusi proyek">Diskusi Proyek</flux:select.option>
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