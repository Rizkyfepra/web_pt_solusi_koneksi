<?php

namespace App\Http\Controllers;

use App\Models\PesanKontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'   => 'required|string|max:100',
            'email'  => 'required|email|max:255',
            'subjek' => 'nullable|string|max:150',
            'pesan'  => 'required|string|max:2000',
        ]);

        PesanKontak::create($validated);

        return redirect()
            ->route('kontak')
            ->with('success', 'Pesan berhasil dikirim. Kami akan menghubungi Anda segera.');
    }
}
