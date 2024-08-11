<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class WisataLandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konf = DB::table('setting')->first();
        $wisata = DB::table('wisata')
            ->leftJoin('ratting', function($join){
                $join->on('wisata.id_wisata', '=', 'ratting.id_wisata')
                ->where('ratting.publish', '=', 'yes');
            })
            ->select('wisata.*', DB::raw('AVG(ratting.ratting) as avg_ratting'))
            ->groupBy('wisata.id_wisata', 'wisata.tipe_wisata', 'nama_wisata', 'lokasi', 'pemilik', 'daya_tarik', 'sarana', 'fasilitas', 'luas', 'biaya_masuk', 'deskripsi', 'foto_wisata', 'foto_wisata2', 'foto_wisata3', 'long_lokasi', 'lat_lokasi', 'slug_wisata', 'created_at', 'updated_at')
            ->get(); 

        return view('wisata', compact('konf', 'wisata'));
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
        //
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
