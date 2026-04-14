@foreach ($eskul as $e)
<div class="bg-white rounded-xl shadow overflow-hidden">

    <div class="w-full h-40 overflow-hidden">
        <img src="{{ $e->foto ? asset('storage/eskul/' . $e->foto) : 'https://via.placeholder.com/300' }}"
            class="w-full h-full object-cover">
    </div>

    <div class="p-4">
        <h2 class="font-bold">{{ $e->nama }}</h2>
        <p class="text-sm text-gray-500">
            {{ \Illuminate\Support\Str::limit($e->deskripsi, 80) }}
        </p>

        <div class="flex gap-2 mt-3">
            <!-- EDIT -->
            <button onclick="openEdit({{ $e->id }})"
                class="bg-yellow-500 hover:bg-yellow-600 transition px-3 py-1 rounded text-white">
                Edit
            </button>

            <!-- DELETE -->
            <form id="delete-{{ $e->id }}" action="/admin/eskul/delete/{{ $e->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button"
                    onclick="confirmDelete({{ $e->id }})"
                    class="bg-red-500 px-3 py-1 rounded text-white">
                    Hapus
                </button>
            </form>
        </div>
    </div>
</div>
@endforeach

<div class="col-span-3 mt-4">
    {{ $eskul->links() }}
</div>