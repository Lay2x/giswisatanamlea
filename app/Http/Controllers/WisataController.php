<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Tipewisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Wisata';
        $wisata = DB::table('wisata')->get();
        return view('wisata.index', compact('title', 'wisata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Data Wisata';
        $tipe_wisata = DB::table('tipe_wisata')->get();
        $wisata = DB::table('wisata')->get();
        return view('wisata.create', compact('title', 'wisata', 'tipe_wisata'));
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
            'nama_wisata' => 'required',
            'lokasi' => 'required',
            'pemilik' => 'required',
            'daya_tarik' => 'required',
            'fasilitas' => 'required',
            'sarana' => 'required',
            'luas' => 'required',
            'biaya_masuk' => 'required',
            'deskripsi' => 'required',
            'foto_wisata' => 'required: jpg, jpeg, png, tfif, jfif, raw, gif, ai, psd',
            'foto_wisata2' => 'required: jpg, jpeg, png, tfif, jfif, raw, gif, ai, psd',
            'foto_wisata3' => 'required: jpg, jpeg, png, tfif, jfif, raw, gif, ai, psd',
        ], $message);

        $foto_wisata = $request->file('foto_wisata');
        $namafotowisata = 'wisata'.date('Ymdhis').'.'.$request->file('foto_wisata')->getClientOriginalExtension();
        $foto_wisata->move('file/wisata/',$namafotowisata);

        $foto_wisata2 = $request->file('foto_wisata2');
        $namafotowisata2 = 'wisata'.date('Ymdhis2').'.'.$request->file('foto_wisata2')->getClientOriginalExtension();
        $foto_wisata2->move('file/wisata/',$namafotowisata2);

        $foto_wisata3 = $request->file('foto_wisata3');
        $namafotowisata3 = 'wisata'.date('Ymdhis3').'.'.$request->file('foto_wisata3')->getClientOriginalExtension();
        $foto_wisata3->move('file/wisata/',$namafotowisata3);

        $wisata = new Wisata();
        $wisata->tipe_wisata = $request->tipe_wisata;
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->lokasi = $request->lokasi;
        $wisata->pemilik = $request->pemilik;
        $wisata->daya_tarik = $request->daya_tarik;
        $wisata->sarana = $request->sarana;
        $wisata->fasilitas = $request->fasilitas;
        $wisata->luas = $request->luas;
        $wisata->biaya_masuk = $request->biaya_masuk;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->foto_wisata = $namafotowisata;
        $wisata->foto_wisata2 = $namafotowisata2;
        $wisata->foto_wisata3 = $namafotowisata3;
        $wisata->long_lokasi = $request->long_lokasi;
        $wisata->lat_lokasi = $request->lat_lokasi;
        $wisata->slug_wisata = Str::slug($request->nama_wisata); 
        $wisata->save();
        return redirect()->route('wisata.index')->with('sukses', 'Berhasil Tambah Data Wisata');
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
        $wisata = Wisata::findorfail($id);
        $tipe_wisata = DB::table('tipe_wisata')->orderBy('tipe_wisata')->get();
        $title = 'Edit Wisata';
        return view('wisata.edit', compact('wisata', 'tipe_wisata', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $wisata = Wisata::findorfail($id);
        $namaFotoWisata = $wisata->foto_wisata;
        $namaFotoWisata2 = $wisata->foto_wisata2;
        $namaFotoWisata3 = $wisata->foto_wisata3;
        $update = [
            'tipe_wisata' => $request->tipe_wisata,
            'nama_wisata' => $request->nama_wisata, 
            'lokasi' => $request->lokasi, 
            'pemilik' => $request->pemilik,
            'daya_tarik' => $request->daya_tarik,
            'sarana' => $request->sarana,
            'fasilitas' => $request->fasilitas,
            'luas' => $request->luas,
            'biaya_masuk' => $request->biaya_masuk,
            'deskripsi' => $request->deskripsi,
            'foto_wisata' => $namaFotoWisata,
            'foto_wisata2' => $namaFotoWisata2,
            'foto_wisata3' => $namaFotoWisata3,
            'long_lokasi' => $request->long_lokasi,
            'lat_lokasi' => $request->lat_lokasi,
            'slug_wisata' => Str::slug($request->nama_wisata),
        ];
        if ($request->foto_wisata != ""){
            $request->foto_wisata->move(public_path('file/wisata/'), $namaFotoWisata);
        }   
        if ($request->foto_wisata2 != ""){
            $request->foto_wisata2->move(public_path('file/wisata/'), $namaFotoWisata2);
        }
        if ($request->foto_wisata3 != ""){
            $request->foto_wisata3->move(public_path('file/wisata/'), $namaFotoWisata3);
        }
        $wisata->update($update);
        return redirect()->route('wisata.index')->with('sukses', 'Berhasil Edit Wisata');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $wisata = Wisata::find($id);
        $namaFotoWisata = $wisata->foto_wisata;
        $file_wisata = public_path('file/wisata/').$namaFotoWisata;
        if(file_exists($file_wisata)){
            @unlink($file_wisata);
        }
        $wisata->delete();
        return back()->with('sukses', 'Data Berhasil Dihapus');
    }
}
