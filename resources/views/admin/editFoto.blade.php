@extends('admin.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form Edit Foto</h4>
                </div>
                <form action="/updateFoto/{{ $foto->FotoID }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Foto</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="JudulFoto" class="form-control" placeholder="Judul Foto"
                                    value="{{ $foto->JudulFoto }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi Foto</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="DeskripsiFoto" class="form-control" placeholder="Deskripsi Foto"
                                    value="{{ $foto->DeskripsiFoto }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi File</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="file" class="form-control " name="LokasiFile" id="LokasiFile">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Album ID</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="AlbumID" class="form-select">
                                    @foreach ($album as $data)
                                        <option value="{{ $data->AlbumID }}">{{ $data->AlbumID }} || {{ $data->NamaAlbum }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <input type="text" name="UserID" hidden value="{{ Auth::id() }}">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <input type="submit" value="Edit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection