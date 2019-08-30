<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = DB::table('pendaftaran')->get();
        return view('form.pendaftaran',['pendaftaran' => $pendaftaran]);
 
    }

    public function tambah()
    {
        return view('form.tambah');
    }

    public function proses(Request $request)
    {
        DB::table('pendaftaran')->insert([
            'nama_siswa' => $request->nama
        ]);
        return redirect('/form-pendaftaran');
 
    }
}
