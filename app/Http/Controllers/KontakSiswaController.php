<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kontak_siswa;
class KontakSiswaController extends Controller
{
    public function index()
    {
        // $datas = kontak_siswa::all();
        return kontak_siswa::all();
    }

    public function create(Request $request)
    {
        $kontaksiswa = new kontak;
        $kontaksiswa->nama = $request->nama;
        $kontaksiswa->email = $request->email;
        $kontaksiswa->nohp = $request->nohp;
        $kontaksiswa->alamat = $request->alamat;
        $kontaksiswa->save();

        return 'data berhasil masuk';
    }

    public function update(Request $request,$id)
    {
        $nama = $request->nama;
        $email = $request->email;
        $nohp = $request->nohp;
        $alamat = $request->alamat;
        
        $kontaksiswa = kontak::find($id);
        $kontaksiswa->nama = $nama;
        $kontaksiswa->email = $request->email;
        $kontaksiswa->nohp = $request->nohp;
        $kontaksiswa->alamat = $alamat;
        $kontaksiswa->save();

        return 'data berhasil diupdate';
    }

    public function delete($id)
    {
        $kontaksiswa = kontak::find($id);
        $kontaksiswa->delete();

        return "data berhasil dihapus";
    }
}
