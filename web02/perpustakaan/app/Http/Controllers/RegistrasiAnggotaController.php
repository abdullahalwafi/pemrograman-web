<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrasiAnggotaController extends Controller
{
    public function index()
    {
        return view('registrasi_anggota');
    }
    public function hasil(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5',
            'email' => 'required|email',
            'lokasi' => 'required',
            'semester' => 'required',
            'jenis_kelamin' => 'required',
            'tema' => 'required',
        ]);
        return view('hasil_regist', ['data' => $request]);
    }
    
}
