<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create Unit Kerja</h1>

    <form wire:submit.prevent="save" class="space-y-4">
        <flux:input
            type="text"
            id="kode"
            wire:model.defer="kode"
            label="Kode unit kerja"
            placeholder="Masukkan Kode unit kerja"
            required
            />

        <flux:select
            id="nama"
            wire:model.defer="nama"
            label="nama unit kerja"
            placeholder="Pilih nama unit kerja"
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