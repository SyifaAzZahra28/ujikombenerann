<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Album;

class GalerryController extends Controller
{
    public function index()
    {
        $photo = Foto::join('albums', 'albums.AlbumID', '=', 'fotos.AlbumID')->get();
        return view('about', compact('photo'));
    }

    public function show()
    {
        return view('category');
    }
    
    public function boba()
    {
        $nama = 'boba';
        $album = Album::where('NamaAlbum', $nama)->first();
        $photo = Foto::where('AlbumID', $album->AlbumID)->get();
        return view('boba', compact('photo'));
    }

    public function coffe()
    {
        $nama = 'coffe';
        $album = Album::where('NamaAlbum', $nama)->first();
        $photo = Foto::where('AlbumID', $album->AlbumID)->get();
        return view('coffe', compact('photo'));
    }

    public function oursignature()
    {
        $nama = 'oursignature';
        $album = Album::where('NamaAlbum', $nama)->first();
        $photo = Foto::where('AlbumID', $album->AlbumID)->get();
        return view('oursignature', compact('photo'));
    }
}
