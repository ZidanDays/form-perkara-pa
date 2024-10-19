<?php

namespace App\Http\Controllers;

use App\Models\Perkara;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormsController extends Controller
{
    // Menampilkan halaman form Akta Cerai
    public function ShowPageForms()
    {
        return view('forms.index'); // Mengarahkan ke form Akta Cerai
    }

    // Menampilkan halaman form Salinan Putusan/Penetapan (Salput)
    // public function ShowPageFormsSalput()
    // {
    //     return view('forms.indexSalput'); // Mengarahkan ke form Salput
    // }

    // Menyimpan data dari form Akta Cerai
    public function store(Request $request)
    {
        // Validasi input form
        $request->validate([
            'tanggal' => 'required|date',
            'nomor_perkara' => 'required|string|max:255',
            'nomor_akta' => 'nullable|string|max:255',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'pihak' => 'required|in:penggugat,pemohon,tergugat,termohon,lainnya',
            'nama_penggugat' => 'nullable|string|max:255', // Ubah ke nullable jika bisa kosong
            'nama_tergugat' => 'nullable|string|max:255', // Ubah ke nullable jika bisa kosong
            'nama_ketua_majelis' => 'nullable|string|max:255', // Ubah ke nullable jika bisa kosong
        ]);

        // Simpan data ke database
        Perkara::create([
            'tanggal' => $request->input('tanggal'),
            'nomor_perkara' => $request->input('nomor_perkara'),
            'nomor_akta' => $request->input('nomor_akta'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'pihak' => $request->input('pihak'),
            'nama_penggugat' => $request->input('nama_penggugat'),
            'nama_tergugat' => $request->input('nama_tergugat'),
            'nama_ketua_majelis' => $request->input('nama_ketua_majelis'),
        ]);

        // Redirect ke halaman form dengan pesan sukses
        return redirect()->route('form.view')->with('success', 'Data perkara berhasil disimpan.');
    }



        // Menampilkan halaman edit data perkara
        public function edit($id)
        {
            $perkara = Perkara::findOrFail($id);
            return view('forms.edit', compact('perkara')); // Mengarahkan ke view edit form
        }

            // Update data perkara
    public function update(Request $request, $id)
    {
    // Validasi input form
    $request->validate([
        'tanggal' => 'required|date',
        'nomor_perkara' => 'required|string|max:255',
        'nomor_akta' => 'required|string|max:255',
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'nomor_telepon' => 'required|string|max:15',
        'pihak' => 'required|in:penggugat,pemohon,tergugat,termohon,lainnya',
        'nama_penggugat' => 'required|string|max:255',
        'nama_tergugat' => 'required|string|max:255',
        'nama_ketua_majelis' => 'required|string|max:255',
    ]);

    // Update data ke database
    $perkara = Perkara::findOrFail($id);
    $perkara->update($request->all()); // Mengupdate semua data yang diinputkan

    // Redirect ke halaman yang diinginkan dengan pesan sukses
    return redirect()->route('dashboard')->with('success', 'Data perkara berhasil diubah.');
    }

        // Delete data perkara
        public function destroy($id)
        {
            // Hapus data perkara
            Perkara::findOrFail($id)->delete();
    
            // Redirect ke halaman form dengan pesan sukses
            return redirect()->route('dashboard')->with('success', 'Data perkara berhasil dihapus.');
        }
}