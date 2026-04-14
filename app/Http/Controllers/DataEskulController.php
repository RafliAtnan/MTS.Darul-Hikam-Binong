<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eskul;

class DataEskulController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->search;

        $eskul = Eskul::when($search, function ($query) use ($search) {
            $query->where('nama', 'like', "%$search%")
                ->orWhere('deskripsi', 'like', "%$search%");
        })->latest()->paginate(5);

        // 🔥 INI YANG FIX
        if ($request->ajax()) {
            return view('admin.eskul.partials.table', compact('eskul'))->render();
        }

        $totalEskul = \App\Models\Eskul::count();

        return view('admin.eskul.dataeskul', compact('eskul', 'search', 'totalEskul'));
    }

    public function create()
    {
        return view('admin.eskul.tambah');
    }

    public function edit($id)
    {
        $eskul = Eskul::findOrFail($id);
        return response()->json($eskul);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $foto = $request->file('foto');
        $namaFile = time() . '.' . $foto->getClientOriginalExtension();
        $foto->storeAs('eskul', $namaFile, 'public');

        Eskul::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $namaFile
        ]);

        return redirect('/admin/eskul')->with('success', 'Data eskul berhasil ditambahkan');
    }


    public function update(Request $request, $id)
    {
        $eskul = Eskul::findOrFail($id);

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ];

        // kalau upload foto baru
        if ($request->hasFile('foto')) {

            // hapus foto lama
            if ($eskul->foto && file_exists(storage_path('app/public/eskul/' . $eskul->foto))) {
                unlink(storage_path('app/public/eskul/' . $eskul->foto));
            }

            $file = $request->file('foto');
            $namaFile = time() . '.' . $file->getClientOriginalExtension();

            $file->storeAs('eskul', $namaFile, 'public');

            $data['foto'] = $namaFile;
        }

        $eskul->update($data);

        return response()->json([
            'success' => true
        ]);
    }

    public function destroy($id)
    {
        $eskul = Eskul::findOrFail($id);
        $eskul->delete();

        return redirect('/admin/eskul')->with('success', 'Data eskul berhasil dihapus');
    }
}
