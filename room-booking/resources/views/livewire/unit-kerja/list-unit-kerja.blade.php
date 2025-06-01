<div class="container mx-auto">
    @if (session('message'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <h1 class="text-2xl font-bold mb-4">List Unit Kerja</h1>

    <div class="flex justify-between mb-4">
        <flux:button :href="route('unit-kerja.create')" variant="primary">New Unit Kerja</flux:button>
    </div>

    <table class="min-w-full border-collapse border border-grey-400 mt-4">
        <thead>
            <tr class="text-left bg-grey-100">
                <th class="py-2 px-4 border border-blue-300">Kode</th>
                <th class="py-2 px-4 border border-blue-300">Nama</th>
                <th class="py-2 px-4 border border-blue-300">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unit_kerjas as $unit_kerja)
                <tr>
                    <td class="py-2 px-4 border border-blue-300">{{ $unit_kerja->kode }}</td>
                    <td class="py-2 px-4 border border-blue-300">{{ $unit_kerja->nama }}</td>
                    <td class="py-2 px-4 border border-blue-300">
                        <!-- Add your action buttons here -->
                        <flux:button :href="route('unit_kerja.edit', $unit_kerja)">Edit</flux:button>
                        <flux:button variant="danger" wire:click="delete({{ $unit_kerja->id }})" wire:confirm="Are you sure?">Delete</flux:button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>