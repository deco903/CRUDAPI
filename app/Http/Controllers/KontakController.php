<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kontak;


class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Kontak::paginate(10);
        //$datas = Kontak::all();
        return view('index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validation
        $validatedData = $request->validate([
            'nama' => 'required|min:4',
            'email' => 'required|email',
            'nohp' => 'required',
            'alamat' => 'required',
        ]);

        $data = new Kontak();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->nohp = $request->nohp;
        $data->alamat = $request->alamat;
        $data->save();

        return redirect('/kontak')->with('pesan','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function edit($id)
    {
        $data = Kontak::find($id);
        return view('edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Kontak::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->nohp = $request->nohp;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect('/kontak')->with('pesan','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Kontak::find($id);
        $delete->delete();
        return redirect('/kontak')->with('pesan','Data berhasil dihapus!');
    }
}
