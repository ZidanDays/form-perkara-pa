<?php

namespace App\Http\Controllers;

use App\Models\Perkara;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormsController extends Controller
{
    //
    public function ShowPageForms ()
    {
        return view('forms.index');
    }

    public function store(Request $request)
    {
        // Validasi input form
        $request->validate([
            'tanggal' => 'required|date',
            'nomor_perkara' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'pihak' => 'required|in:penggugat,pemohon,tergugat,termohon',
        ]);

        // Simpan data ke database
        Perkara::create([
            'tanggal' => $request->input('tanggal'),
            'nomor_perkara' => $request->input('nomor_perkara'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'pihak' => $request->input('pihak'),
        ]);

        // Redirect ke halaman yang diinginkan dengan pesan sukses
        return redirect()->route('form.view')->with('success', 'Data perkara berhasil disimpan.');
    }
}