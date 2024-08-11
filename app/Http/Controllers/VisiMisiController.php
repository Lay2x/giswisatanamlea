<?php

namespace App\Http\Controllers;
use App\Models\VisiMisi;

use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Visi Misi";
        $visi = VisiMisi::get();
        return view('visimisi.index', compact('title', 'visi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Visi Misi";
        $visi = VisiMisi::get();
        return view('visimisi.create', compact('title', 'visi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'required' => ':atribute wajib diisi!!!',
        ];

        $request->validate([
            'visi' => 'required',
            'misi' => 'required'
        ], $message);

        $visi = new VisiMisi();
        $visi->visi = $request->visi;
        $visi->misi = $request->misi;
        $visi->save();
        return redirect()->route('visimisi.index')->with('sukses', 'Data Berhasil Di Simpan!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $visi = VisiMisi::findorfail($id);
        $title = "Edit Data Visi Misi";
        return view('visimisi.edit', compact('visi', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $visi = VisiMisi::findorfail($id);
        $update = [
            'visi' => $request->visi,
            'misi' => $request->misi
        ];
        $visi->update($update);
        return redirect()->route('visimisi.index')->with('sukses', 'Data Berhasil Di Edit!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $visi = VisiMisi::findorfail($id);
        $visi->delete();
        return back()->with('sukses', 'Data Berhasil Di Hapus!!!');
    }
}
