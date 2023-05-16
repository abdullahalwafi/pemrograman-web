<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanBukuController extends Controller
{
    public function index()
    {
        return view('peminjaman_buku');
    }
    public function hasil(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5',
            'jenis_kelamin' => 'required',
            'tanggal' => 'required|date',
            'tema' => 'required',
            'isbn' => 'required',
        ]);
        return view('hasil_peminjaman', ['data' => $request]);
    }
}
