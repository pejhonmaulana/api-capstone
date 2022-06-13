<?php

namespace App\Http\Controllers;

use App\Models\Padi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Image;
use App\Http\Controllers\KategoriController;

class PadiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $padi = Padi::all();
        return response()->json([
            'message' => 'Success',
            'data' => $padi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $padi = new Padi;
        $padi->nama = $request->nama;
        $padi->umur = $request->umur;
        $padi->tekstur = $request->tekstur;
        $padi->hama = $request->hama;
        $padi->penyakit = $request->penyakit;
        $padi->anjuran_tanam = $request->anjuran_tanam;
        $padi->potensi_hasil = $request->potensi_hasil;
        $padi->kategori_id = $request->kategori_id;
        $padi->harga = $request->harga;
        if ($request->gambar) {
            $image = $request->gambar;
            $image_name = $image->getClientOriginalName();
            Image::make($image)->save(public_path("gambar").$image_name);
            $path = "http://localhost/capstone-app/public/gambar$image_name";
            $padi->gambar = $path;
        }
        $padi->save();
        return response()->json([
            'message'=>'success',
            'data'=>$padi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Padi  $padi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Padi::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Padi  $padi
     * @return \Illuminate\Http\Response
     */
    public function edit(Padi $padi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Padi  $padi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Padi  $padi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Padi $padi)
    {
        //
    }
}
