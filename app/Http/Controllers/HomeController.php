<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Ratting;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konf = DB::table('setting')->first();
        $wisata = DB::table('wisata')->get();
        $visi = DB::table('visi_misi')->first();
        $ratting = DB::table('ratting')->join('wisata', 'wisata.id_wisata', '=', 'ratting.id_wisata')->where('publish', 'yes')->get();
        $rekomendasi = DB::table('wisata')
            ->leftJoin('ratting', function($join){
                    $join->on('wisata.id_wisata', '=', 'ratting.id_wisata')
                    ->where('ratting.publish', '=', 'yes');
            })
            ->where('publish', 'yes')
            ->select('wisata.*', DB::raw('AVG(ratting.ratting) as avg_ratting'))
            ->groupBy('wisata.id_wisata', 'wisata.tipe_wisata', 'nama_wisata', 'lokasi', 'pemilik', 'daya_tarik', 'sarana', 'fasilitas', 'luas', 'biaya_masuk', 'deskripsi', 'foto_wisata', 'foto_wisata2', 'foto_wisata3', 'long_lokasi', 'lat_lokasi', 'slug_wisata', 'created_at', 'updated_at')
            ->get();

        return view('welcome', compact('konf', 'wisata', 'visi', 'ratting', 'rekomendasi'));
    }

    public function detailwisata($slug)
    {
        $listwisata = DB::table('wisata')->where('slug_wisata', $slug)->first();
        $komentar = DB::table('ratting')->join('wisata', 'wisata.id_wisata', '=', 'ratting.id_wisata')->where('slug_wisata', $slug,)->where('publish', 'yes')->get();
        $konf = DB::table('setting')->first();
        
        return view('detail-wisata', compact('konf', 'listwisata', 'komentar'));
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $today = Carbon::now();

        $request->validate([
            'nama_komentator' => 'required',
            'id_wisata' => 'required',
            'ratting' => 'required',
        ]);

        $ratting = new Ratting();
        $ratting->nama_komentator = $request->nama_komentator;
        $ratting->id_wisata = $request->id_wisata;
        $ratting->ratting = $request->ratting;
        $ratting->komentar = $request->komentar;
        $ratting->tanggal_buat = $today;
        $ratting->publish = "yes";
        $ratting->save();
        return back()->with('sukses', 'Komentar Berhasil Terkirim!!!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
