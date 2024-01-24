<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use app\Http\Controllers\PetugasController.php

use App\Models\Petugas;

class PetugasController extends Controller
{
    protected $primaryKey = 'id';

    public function index()
    {
        $petugas = Petugas::all();

        return view('layouts.app', compact('petugas'));
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:30',
            'username' => 'required|string|max:30|unique:petugas',
            'password' => 'required|string|max:30',
            'level' => 'required|in:admin,petugas',
        ]);

        // Simpan petugas baru ke dalam database
        $petugas = new Petugas([
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'level' => $request->input('level'),
        ]);

        $petugas->save();

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil didaftarkan!');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:30',
            'username' => 'required|string|max:30|unique:petugas',
            'password' => 'required|string|max:30',
            'level' => 'required|in:admin,petugas',
        ]);

        // Simpan petugas baru ke dalam database
        $petugas = new Petugas([
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'password' => ($request->input('password')),
            'level' => $request->input('level'),
        ]);

        $petugas->save();

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil didaftarkan!');
    }

    public function edit($id)
{
    $petugas = Petugas::find($id);

    if (!$petugas) {
        // Objek tidak ditemukan, lakukan sesuatu, seperti redirect atau menampilkan pesan
        return redirect()->route('petugas.index')->with('error', 'Petugas tidak ditemukan');
    }

    return view('petugas.edit', compact('petugas'));
}

public function update(Request $request, $id)
{
    $petugas = Petugas::find($id);

    if (!$petugas) {
        // Objek tidak ditemukan, lakukan sesuatu, seperti redirect atau menampilkan pesan
        return redirect()->route('petugas.index')->with('error', 'Petugas tidak ditemukan');
    }

    // Lanjutkan dengan pemrosesan data
    $petugas->nama = $request->input('nama');
    $petugas->username = $request->input('username');
    $petugas->level = $request->input('level');
    $petugas->save();

    return redirect()->route('petugas.index')->with('success', 'Data berhasil diperbarui');
}


    public function destroy($id)
    {
        Petugas::findOrFail($id)->delete();

        return redirect()->route('petugas.index')->with('success', 'Data petugas berhasil dihapus!');
    }
}
