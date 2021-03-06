<?php

namespace App\Http\Controllers;

use App\Models\Pupuk;
use Illuminate\Http\Request;

class PupukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pupuk::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pupuk = new Pupuk;
        $pupuk->nama = $request->nama;
        $pupuk->harga = $request->harga;
        $pupuk->save();
        return "data pupuk berhasil disimpan";
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pupuk  $pupuk
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        return Pupuk::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pupuk  $pupuk
     * @return \Illuminate\Http\Response
     */
    public function edit(Pupuk $pupuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pupuk  $pupuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pupuk $pupuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pupuk  $pupuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pupuk $pupuk)
    {
        //
    }
}
