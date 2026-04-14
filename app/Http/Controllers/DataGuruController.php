<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class DataGuruController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $guru = Guru::when($search, function ($query) use ($search) {
            $query->where('nama', 'like', "%$search%")
                ->orWhere('mapel', 'like', "%$search%");
        })->latest()->paginate(5);

        // 🔥 INI YANG FIX
        if ($request->ajax()) {
            return view('admin.guru.partials.table', compact('guru'))->render();
        }

        $totalGuru = \App\Models\Guru::count();


        // ✅ kalau normal → full page
        return view('admin.guru.dataguru', compact('guru', 'search'));
    }

    public function create()
    {
        return view('admin.guru.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'mapel' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $foto = $request->file('foto');
        $namaFile = time() . '.' . $foto->getClientOriginalExtension();
        $foto->storeAs('guru', $namaFile, 'public');

        Guru::create([
            'nama' => $request->nama,
            'mapel' => $request->mapel,
            'foto' => $namaFile
        ]);

        return redirect('/admin/guru')->with('success', 'Data guru berhasil ditambahkan');
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return response()->json($guru);
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $data = [
            'nama' => $request->nama,
            'mapel' => $request->mapel,
        ];

        // kalau upload foto baru
        if ($request->hasFile('foto')) {

            // hapus foto lama
            if ($guru->foto && file_exists(storage_path('app/public/guru/' . $guru->foto))) {
                unlink(storage_path('app/public/guru/' . $guru->foto));
            }

            $file = $request->file('foto');
            $namaFile = time() . '.' . $file->getClientOriginalExtension();

            $file->storeAs('guru', $namaFile, 'public');

            $data['foto'] = $namaFile;
        }

        $guru->update($data);

        return response()->json([
            'success' => true
        ]);
    }
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect('/admin/guru')->with('success', 'Data guru berhasil dihapus');
    }
}
