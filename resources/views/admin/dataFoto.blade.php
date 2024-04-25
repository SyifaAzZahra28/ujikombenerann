@extends('admin.main')
@section('content') 

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Data Foto</h4>
          <div class="card-header-action">
            <a href="{{ route('tambahFoto') }}" class="btn btn-info">Tambah Foto <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
              <tr>
                
                <th scope="col">Foto ID</th>
                <th scope="col">Judul Foto</th>
                <th scope="col">Deskripsi Foto</th>
                <th scope="col">Tanggal Unggah</th>
                <th scope="col">Lokasi File</th>
                <th scope="col">Album ID</th>
                <th scope="col">User ID</th>
                <th scope="col">Aksi</th>
              </tr>
              @foreach ($photo as $data)
                <tr>
                   
                    <td>{{ $data->FotoID }}</td>
                    <td>{{ $data->JudulFoto }}</td>
                    <td>{{ $data->DeskripsiFoto }}</td>
                    <td>{{ $data->TanggalUnggah}}</td>
                    <td>{{ $data->LokasiFile}}</td>
                    <td>{{ $data->AlbumID}}</td>
                    <td>{{ $data->UserID}}</td> 
                    <td>
                      <a href="/editFoto/{{ $data->FotoID }}"><button>edit</button></a>
                      <a href="/hapusFoto/{{ $data->FotoID }}"><button>hapus</button></a>
                    </td>
                </tr>
                  @endforeach
              
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection