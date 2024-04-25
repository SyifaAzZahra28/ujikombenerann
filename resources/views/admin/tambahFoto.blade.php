@extends('admin.main')
@section('content')

<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Tambah Data Foto</h4>
                  </div>
                  <form action="{{ route('simpann') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Foto</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="JudulFoto" id="JudulFoto">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi Foto</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="DeskripsiFoto" id="DeskripsiFoto">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi File</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control " name="LokasiFile" id="LokasiFile" required>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Album ID</label>
                      <div class="col-sm-12 col-md-7">
                      <select name="AlbumID" class="form-select" arial-label="Default select example">
                        @foreach ($album as $data)
                        <option value="{{ $data->AlbumID }}">{{ $data->AlbumID }} || {{ $data->NamaAlbum }}</option>
                        @endforeach
                      </select>
                      </div>
                      <input type="text" name="UserID" hidden value="{{ Auth::id() }}">
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        {{-- <a href="/albumAdmin"><button type="submit" class="btn btn-warning">Tambah</button></a> --}}
                        <input type="submit" value="Tambah">
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
@endsection