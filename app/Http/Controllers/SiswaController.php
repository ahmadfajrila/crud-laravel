<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function tampil()
    {
        $siswa = Siswa::get();
        return view('siswa.tampil', compact('siswa'));
    }
    function tambah()
    {
        return view('siswa.tambah');
    }
    public function submit(Request $request)
    {
        
        $request->validate([
            'nis' => 'required|numeric',
            'name' => 'required|string|max:255',
            'addres' => 'required|string|max:255',
            'number' => 'required|numeric',
            'gender' => 'required|string|max:10'
        ]);

        
        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->name = $request->name;
        $siswa->addres = $request->addres;
        $siswa->number = $request->number;
        $siswa->gender = $request->gender;
        $siswa->save();

        
        if ($request->ajax()) {
            return response()->json(['message' => 'Data siswa berhasil disimpan'], 200);
        }

       
        return redirect()->route('siswa.tampil');
    }

    function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->nis = $request->nis;
        $siswa->name = $request->name;
        $siswa->addres = $request->addres;
        $siswa->number = $request->number;
        $siswa->gender = $request->gender;
        $siswa->save();

        return response()->json(['message' => 'Data berhasil diupdate']);
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        
        return response()->json(['message' => 'Data berhasil dihapus']);
    }

}
