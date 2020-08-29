<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calonsiswa;

class CalonsiswaController extends Controller
{
    public function index()
    {
        $calonsiswa = Calonsiswa::all();
        return view('daftar-calon-siswa', ['calonsiswa' => $calonsiswa]);
    }

    public function create()
    {
        return view('form-pendaftaran');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'noppdb' => 'required|size:10',
            'nama' => 'required|min:3|max:60',
            'asal_sekolah' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'alamat' => 'required',
            'nohp' => ''
        ]);
        // dump($validateData);
        $calonsiswa = new Calonsiswa();
        $calonsiswa->noppdb = $validateData['noppdb'];
        $calonsiswa->nama = $validateData['nama'];
        $calonsiswa->asal_sekolah = $validateData['asal_sekolah'];
        $calonsiswa->pilihan1 = $validateData['pilihan1'];
        $calonsiswa->pilihan2 = $validateData['pilihan2'];
        $calonsiswa->alamat = $validateData['alamat'];
        $calonsiswa->nohp = $validateData['nohp'];

        $calonsiswa->save();

        return 'Data Berhasil Disimpan Ke Database';
    }

    public function show($calonsiswa)
    {
        // dump($calonsiswa);
        $result = Calonsiswa::find($calonsiswa);
        return view('detail_calon', ['calonsiswa'=>$result]);
    }
}
