@foreach ($guru as $g)
<tr class="border-b">
    <td class="p-3">
        <img src="{{ $g->foto ? asset('storage/guru/' . $g->foto) : 'https://via.placeholder.com/100' }}"
            class="w-12 h-12 object-cover rounded-full">
    </td>

    <td class="p-3">{{ $g->nama }}</td>
    <td class="p-3">{{ $g->mapel }}</td>

    <td class="p-3 flex gap-2">
        <!-- EDIT -->
        <button onclick="openEdit({{ $g->id }})"
            class="bg-yellow-500 hover:bg-yellow-600 transition px-3 py-1 rounded text-white">
            Edit
        </button>

        <!-- DELETE -->
        <form id="delete-{{ $g->id }}" action="/admin/guru/delete/{{ $g->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="button"
                onclick="confirmDelete({{ $g->id }})"
                class="bg-red-500 px-3 py-1 rounded text-white">
                Hapus
            </button>
        </form>
    </td>
</tr>
@endforeach