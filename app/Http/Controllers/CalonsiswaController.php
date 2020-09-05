<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calonsiswa;

class CalonsiswaController extends Controller
{
    public function index()
    {
        $calonsiswa = Calonsiswa::all();
        return view('siswa/index', ['calonsiswa' => $calonsiswa]);
    }

    public function create()
    {
        return view('siswa/tambah')->with('status', 'Data Siswa Berhasil Ditambahkan!');;
    }

    public function store(Request $request)
    {
        $request->validate([
            'noppdb' => 'required|size:10',
            'nama' => 'required|min:3|max:60',
            'asal_sekolah' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'alamat' => 'required',
            'nohp' => 'required'
        ]);

        // $calonsiswa = new Calonsiswa();
        // $calonsiswa->noppdb = $validateData['noppdb'];
        // $calonsiswa->nama = $validateData['nama'];
        // $calonsiswa->asal_sekolah = $validateData['asal_sekolah'];
        // $calonsiswa->pilihan1 = $validateData['pilihan1'];
        // $calonsiswa->pilihan2 = $validateData['pilihan2'];
        // $calonsiswa->alamat = $validateData['alamat'];
        // $calonsiswa->nohp = $validateData['nohp'];

        // $calonsiswa->save();

        Calonsiswa::create($request->all());
        return redirect('/calonsiswa')->with('status', 'Data Siswa Berhasil Ditambahkan!');
    }

    public function show(Calonsiswa $calonsiswa)
    {
        // dump($calonsiswa);
        return view('siswa/detail', ['calonsiswa'=>$calonsiswa]);
    }

    public function destroy(Calonsiswa $calonsiswa)
    {
        Calonsiswa::destroy($calonsiswa->id);
        return redirect('/calonsiswa')->with('status', 'Data Siswa Berhasil Dihapus!');
    }

    public function edit(Calonsiswa $calonsiswa)
    {
        return view('siswa/edit', ['calonsiswa' => $calonsiswa]);
    }

    public function update(Request $request, Calonsiswa $calonsiswa)
    {
        $request->validate([
            'noppdb' => 'required|size:10',
            'nama' => 'required|min:3|max:60',
            'asal_sekolah' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'alamat' => 'required',
            'nohp' => 'required'
        ]);
        
        Calonsiswa::where('id', $calonsiswa->id)
                    ->update([
                        'noppdb' => $request->noppdb,
                        'nama' => $request->nama,
                        'asal_sekolah' => $request->asal_sekolah,
                        'pilihan1' => $request->pilihan1,
                        'pilihan2' => $request->pilihan2,
                        'alamat' => $request->alamat,
                        'nohp' => $request->nohp
                    ]);
        return redirect('/calonsiswa')->with('status', 'Data Siswa Berhasil Diubah!');
    }
}
