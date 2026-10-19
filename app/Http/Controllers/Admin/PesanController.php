<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PesanKontak;

class PesanController extends Controller
{
    public function index()
    {
        $daftarPesan = PesanKontak::latest()->get();

        return view('admin.pesan.index', compact('daftarPesan'));
    }

    public function show(PesanKontak $pesan)
    {
        $pesan->tandaiDibaca();

        return view('admin.pesan.show', compact('pesan'));
    }

    public function destroy(PesanKontak $pesan)
    {
        $pesan->delete();

        return redirect()->route('admin.pesan.index')->with('success', 'Pesan berhasil dihapus.');
    }
}
