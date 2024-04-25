<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Foto;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Album;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\KomentarFoto;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $album = Album::all();
        $photo = Foto::all();
        return view('admin.dataFoto', ['photo' => $photo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $album = Album::get();
        $photo = Foto::all();
        return view('admin.tambahFoto', compact('album', 'user', 'photo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tanggal = Carbon::now()->toDateTimeString();
        $photo = new Foto;
        $photo->JudulFoto = $request->JudulFoto;
        $photo->DeskripsiFoto = $request->DeskripsiFoto;
        $photo->TanggalUnggah = $tanggal;
        // $photo->LokasiFile = $request->LokasiFile;
        $photo->AlbumID = $request->AlbumID;
        $photo['userId'] = auth()->user()->userId;

        // if ($request->hasFile('LokasiFile')) {
        $files = $request->file('LokasiFile');
        // $path = storage_path('');
        $files_name = $photo['userId'] . '-' . now()->timestamp . '.' . $files->getClientOriginalExtension();
        // dd($files_name);
        // $files->getClientOriginalName();
        $files->storeAs('public', $files_name);
        // $photo->file_location = $files_name;
        // dd($files_name);
        $photo->LokasiFile = $files_name;

        // }
        $photo->save();

        return redirect('dataFoto')->with('success', 'tambah data sukses!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        $photo = Foto::whereId($id)->first();
        return view('show', compact(['photo']));
    }


    public function showfoto($id)
    {
        $foto = Foto::join('users', 'users.UserID', '=', 'fotos.UserID')->first();
       
        // dd($foto);
        // $foto = Foto::find($id);    
        $komentar = KomentarFoto::where('FotoID', $id)->get();
        //$foto = Foto::findOrFail($id);      
        return view('admin.detail', compact('foto', 'komentar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function edit($FotoID)
    {
        $album = Album::all();
        $foto = Foto::where('FotoID',$FotoID)->first();

        return view('admin.editFoto', compact(['foto', 'album']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $FotoID)
    {
        // dd($request);
        $photo = Foto::find($FotoID);
        // Lakukan penanganan jika foto tidak ditemukan
        if (!$photo) {
            return redirect('dataFoto')->with('error', 'Foto tidak ditemukan');
        }
    
        $photo->JudulFoto = $request->JudulFoto;
        $photo->DeskripsiFoto = $request->DeskripsiFoto;
        // Pastikan tanggal unggah tetap sama dengan yang sebelumnya
        $photo->TanggalUnggah = $photo->TanggalUnggah;
        $photo->AlbumID = $request->AlbumID;
        $photo->UserID = $request->UserID;

        if ($request->hasFile('file_location')) {
            $files = $request->file('file_location');
            $path = storage_path('app/public');
            $files_name = 'public' . '/' . date('Ymd') . '-' .
            $files->getClientOriginalName();
            $files->storeAs('public', $files_name);
            $photo->file_location = $files_name;
        }
        $photo->save();
    
        return redirect('dataFoto')->with('success', 'Foto berhasil diperbarui');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function delete($FotoID)
    {
        Foto::where('FotoID', $FotoID)->delete();
        return redirect('/dataFoto')->with('success', 'Data berhasil dihapus');
    }


    
    public function toggleLike(Foto $foto)
    {
        // Periksa apakah pengguna telah login
        if (auth()->check()) {
            $UserID = auth()->id();
    
            // Cek apakah pengguna sudah "like" pada foto ini
            $isLiked = $foto->likedByUser($UserID);
    
            if ($isLiked) {
                // Jika pengguna sudah "like", hapus entri "like" dari tabel likefotoss
                Like::where('FotoID', $foto->FotoID)->where('UserID', $UserID)->delete();
                return redirect()->route('dash');
            } else {
                // Jika pengguna belum "like", tambahkan entri "like" ke tabel likefotoss
                Like::create([
                    'FotoID' => $foto->FotoID,
                    'UserID' => $UserID,
                    'TanggalLike' => now(),
                ]);

                return redirect()->route('dash');
            }
        } else {
            // Tindakan jika pengguna tidak terotentikasi (misalnya, tampilkan pesan atau arahkan pengguna untuk login)
            // Contoh:
            return redirect()->route('login')->with('error', 'Anda harus login untuk memberi like.');
        }
    }


    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'IsiKomentar' => 'required',
        ]);

        KomentarFoto::create([
            'FotoID' => $id,
            'UserID' => auth()->id(),
            'IsiKomentar' => $request->IsiKomentar,
            'TanggalKomentar' => now(),
        ]);

        return back()->with('success', 'Komentar berhasil ditambahkan!');
    }

    public function komentar(Foto $foto)
    {
        $komentar = KomentarFoto::where('FotoID', $foto->FotoID)->get();
        return view('gallery', compact('foto', 'komentar'));
    }
}
