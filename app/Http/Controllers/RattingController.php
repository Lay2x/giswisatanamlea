<?php

namespace App\Http\Controllers;

use App\Models\Ratting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RattingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Komentar";
        $komentar = DB::table('ratting')->join('wisata', 'wisata.id_wisata', '=', 'ratting.id_wisata')->get();
        return view('ratting.index', compact('title', 'komentar'));
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
        $ratting = Ratting::findorfail($id);

        if ($ratting->publish == "no") {
            $update = [
                'publish' => "yes"
            ];
            $ratting->update($update);
            return back()->with('sukses', 'Komentar Berhasil Di Publish');
        }else{
            $update = [
                'publish' => 'no'
            ];
            $ratting->update($update);
            return back()->with('sukses', 'Komentar Berhasil Di UnPublish');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rating = Ratting::findorfail($id);
        $rating->delete();
        return back()->with('sukses', 'Data Berhasil Dihapus');
    }
}
