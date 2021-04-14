@extends('layouts.app')

@section('title')
Dashboard
@endsection
@section('content')
  <section class="section">
    <div class="section-header">
      <h1>DATA ARSIP</h1>    
    </div>

  <div class="section-body">
          <div class="card">
            <div class = "card-header">
              <h4>Pencarian Data </h4>
            <div class="card-header-action">
                <form action="/arsip/cari" method="GET">
                    <div class="input-group">
                        <input type="text" name="cari" class="form-control" placeholder="Search" value="{{ old('cari') }}">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                    </div>
                </form>
            </div>
          </div>

    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
            <tr>
              <th>Nama Lengkap</th>
              <th>NIP</th>
              <th>NIK</th>
              <th>Alamat</th>
              <th>Tgl Lahir</th>
              <th>Tempat Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Ibu Kandung</th>
              <th>Jabatan</th>
              <th>Unit Penempatan</th>
              <th>#</th>
            </tr>
            </thead>
            @foreach($data_arsip as $index)
            <tbody>
            <tr>
              <td>{{ $index->nama }}</td>
              <td>{{ $index->nip }}</td>
              <td>{{ $index->nik }}</td>
              <td>{{ $index->alamat }}</td>
              <td>{{ $index->tanggal_lahir }}</td>
              <td>{{ $index->tempat_lahir }}</td>
              <td>{{ $index->jenis_kelamin }}</td>
              <td>{{ $index->ibu_kandung }}</td>
              <td>{{ $index->jabatan }}</td>
              <td>{{ $index->unit_penempatan }}</td>
              <td>
              <a href="{{ url('arsip/edit/'.$index->id) }}" class="btn btn-primary">Edit</a>
                |
              <a href="{{ url('arsip/hapus/'.$index->id) }}"class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            </tbody>
            @endforeach
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
          Halaman : {{ $data_arsip->currentPage() }} <br/>
          Jumlah Data : {{ $data_arsip->total() }} <br/>
          Data Per Halaman : {{ $data_arsip->perPage() }} <br/>
                      
          {{ $data_arsip->links() }}
        </nav>
      </div>
    </div>
  </div>
      
</div>

@endsection