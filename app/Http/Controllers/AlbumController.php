<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = Album::all();
        return view('admin.albumAdmin', compact(['album']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahAlbum');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $message = [
    //         'required' => 'Silahkan isi kolom ini!'
    //     ];
    //     $validatedData = $request->validate([
    //         'NamaAlbum' => 'required|max:255',
    //         'Deskripsi' => 'required|max:255',
    //         'TanggalDiBuat' => 'required'
    //     ],$message
    // );
    //     $validatedData['UserID'] = auth()->user()->UserID;
        // $album = new Album();
        // $album->namaAlbum = $request->inputAlbum;
        // $album->Deskripsi = $request->deskripsi;
        // $album->TanggalDibuat = $request->tanggalDibuat; 
        // $album->namaAlbum = $request->userID;
        $album = $request->all();
        //insert data ke database
        // dd($album);
        Album::create($album);

        return redirect('/albumAdmin')->with('success','Album baru telah ditambahkan!');
    }

    public function album() {
        return view('l');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        //
    }
}
