<?php

namespace App\Http\Controllers;

use App\Models\Tipewisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TipeWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Tipe Wisata';
        $tipe_wisata = DB::table('tipe_wisata')->get();
        return view('tipewisata.index', compact('title', 'tipe_wisata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Data Tipe Wisata';
        $tipe_wisata = DB::table('tipe_wisata')->get();
        return view('tipewisata.create', compact('title', 'tipe_wisata'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute wajib diisi!!!',
        ];

        $request->validate([
            'tipe_wisata' => 'required',
        ], $message);

        $tipe_wisata = new Tipewisata();
        $tipe_wisata->tipe_wisata = $request->tipe_wisata;
        $tipe_wisata->save();
        return redirect()->route('tipewisata.index')->with('sukses', 'Berhasil Tambah Data Tipe Wisata');
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
        $tipe_wisata = Tipewisata::findorfail($id);
        $title = 'Edit Data Tipe Wisata';
        return view('tipewisata.edit', compact('tipe_wisata', 'title' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipe_wisata = Tipewisata::findorfail($id);
        $update = [
            'tipe_wisata' => $request->tipe_wisata, 
        ];
        $tipe_wisata->update($update);
        return redirect()->route('tipewisata.index')->with('sukses', 'Berhasil Edit Tipe Wisata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipe_wisata = Tipewisata::find($id);
        $tipe_wisata->delete();
        return back()->with('sukses', 'Data Berhasil Dihapus');
    }
}
