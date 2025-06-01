<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Unit Kerja {{ $unit_kerja->kode }}</h1>

    <form wire:submit.prevent="save" class="space-y-4">
       <flux:input
            type="text"
            id="kode"
            wire:model.defer="kode"
            label="Kode Unit Kerja"
            placeholder="Masukkan Kode  Unit Kerja"
            required
            />

        <flux:select
            id="nama"
            wire:model.defer="nama"
            label="Nama Unit Kerja"
            placeholder="Pilih Nama Unit Kerja"
            required
            >
            <flux:select.option value="HRD">Human Resource Development</flux:select.option>
            <flux:select.option value="IT">Information Technology</flux:select.option>
            <flux:select.option value="FIN">Finance</flux:select.option>
            <flux:select.option value="MKT">Marketing</flux:select.option>
            <flux:select.option value="PRD">Production</flux:select.option>
        </flux:select>

        <flux:button
            type="submit"
            variant="primary"
            >
            Save
        </flux:button>
    </form>
</div>