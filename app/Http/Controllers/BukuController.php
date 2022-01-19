<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        $objek = \App\Buku::latest()->paginate(10);
        $data['objek'] = $objek;
        return view('buku_index', $data);
    }

    public function tambah()
    {
        $data['objek'] = new \App\Buku();
        $data['action'] = 'BukuController@simpan';
        $data['method'] = 'POST';
        $data['nama_tombol'] = 'Simpan';
        return view('buku_form',$data);
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:bukus,judul',
            'pengarang' => 'required'
        ]);
        $objek = new \App\Buku();
        $objek->judul = $request->judul;
        $objek->pengarang = $request->pengarang;
        $objek->save();
        return back()->with('pesan', 'Data sudah berhasil disimpan');
    }

    public function edit($id)
    {
        $data['objek'] = \App\Buku::findOrFail($id);
        $data['action'] = ['BukuController@update',$id];
        $data['method'] = 'PUT';
        $data['nama_tombol'] = 'Update';
        return view('buku_form',$data);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required'
        ]);
        $objek = \App\Buku::findOrFail($id);
        $objek->judul = $request->judul;
        $objek->pengarang = $request->pengarang;
        $objek->save();
        return redirect('admin/buku/index')->with('pesan', 'Data sudah di update');
    }

    public function hapus($id)
    {
        $objek = \App\Buku::findOrFail($id);
        $objek->delete();
        return back()->with('pesan', 'data berhasil dihapus');
    }
}
