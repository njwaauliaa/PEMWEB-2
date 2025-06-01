<div class="container mx-auto">
    @if (session('message'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <h1 class="text-2xl font-bold mb-4">List Peminjaman</h1>

    <div class="flex justify-between mb-4">
        <flux:button :href="route('peminjaman.create')" variant="primary">New Peminjaman</flux:button>
    </div>

    <table class="min-w-full border-collapse border border-grey-400 mt-4">
        <thead>
            <tr class="text-left bg-grey-100">
                <th class="py-2 px-4 border border-blue-300">ID</th>
                <th class="py-2 px-4 border border-blue-300">Ruang ID</th>
                <th class="py-2 px-4 border border-blue-300">Pegawai ID</th>
                <th class="py-2 px-4 border border-blue-300">Tanggal</th>
                <th class="py-2 px-4 border border-blue-300">Jam Mulai</th>
                <th class="py-2 px-4 border border-blue-300">Jam Akhir</th>
                <th class="py-2 px-4 border border-blue-300">Keterangan</th>
                <th class="py-2 px-4 border border-blue-300">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $peminjaman)
                <tr>
                    <td class="py-2 px-4 border border-blue-300">{{ $peminjaman->id }}</td>
                    <td class="py-2 px-4 border border-blue-300">{{ $peminjaman->ruang_id }}</td>
                    <td class="py-2 px-4 border border-blue-300">{{ $peminjaman->pegawai_id }}</td>
                    <td class="py-2 px-4 border border-blue-300">{{ $peminjaman->tanggal }}</td>
                    <td class="py-2 px-4 border border-blue-300">{{ $peminjaman->jam_mulai }}</td>
                    <td class="py-2 px-4 border border-blue-300">{{ $peminjaman->jam_akhir }}</td>
                    <td class="py-2 px-4 border border-blue-300">{{ $peminjaman->keterangan }}</td>
                    <td class="py-2 px-4 border border-blue-300">
                        <!-- Add your action buttons here -->
                        <flux:button :href="route('peminjaman.edit', $peminjaman)">Edit</flux:button>
                        <flux:button variant="danger" wire:click="delete({{ $peminjaman->id }})" wire:confirm="Are you sure?">Delete</flux:button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>