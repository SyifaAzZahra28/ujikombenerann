@extends('admin.main')
@section('content') 

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Data Album</h4>
          <div class="card-header-action">
            <a href="/tambahAlbum" class="btn btn-info">Tambah Album <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Album</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">UserID</th>
                </tr>
                @foreach ($album as $data)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $data->NamaAlbum }}</td>
                    <td>{{ $data->Deskripsi }}</td>
                    <td>{{ $data->TanggalDibuat }}</td>
                    <td>{{ $data->UserID }}</td>
                </tr>
                  @endforeach
                </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection