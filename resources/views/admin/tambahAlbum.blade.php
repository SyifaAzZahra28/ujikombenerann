@extends('admin.main')
@section('content') 

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Form Tambah Album</h4>
        </div> 
        <form action="{{ route('simpan') }}" method="POST">
          @csrf
          <div class="card-body">
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Album</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" name="NamaAlbum" class="form-control">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" name="Deskripsi" class="form-control">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Dibuat</label>
              <div class="col-sm-12 col-md-7">
                <input type="date" name="TanggalDibuat" class="form-control">
              </div>
            </div>
            <div class="form-group row mb-4">
              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">User Id</label>
              <div class="col-sm-12 col-md-7">
                <input type="text" name="UserID" class="form-control" value="{{ Auth::id() }}">
              </div>
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