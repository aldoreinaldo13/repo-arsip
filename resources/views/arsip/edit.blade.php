@extends('layouts.app')

@section('title')
Dashboard
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>EDIT ARSIP</h1>
        </div>
        @foreach($data_arsip as $index)
        <form action="{{ url('/arsip/update') }}" method="post">
        {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $index->id }}"> <br/>
                <div class="card-body">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" required="required" value="{{ $index->nama }}"> 
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="number" class="form-control" name="nip" required="required" value="{{ $index->nip }}"> 
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" class="form-control" name="nik" required="required" value="{{ $index->nik }}"> 
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="varchar" class="form-control" name="alamat" required="required" value="{{ $index->alamat }}"> 
                        </div>
                        <div class="form-group">
                            <label>Tgl Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" required="required" value="{{ $index->tanggal_lahir }}"> 
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="varchar" class="form-control" name="tempat_lahir" required="required" value="{{ $index->tempat_lahir }}"> 
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="varchar" class="form-control" name="jenis_kelamin" required="required" value="{{ $index->jenis_kelamin }}"> 
                        </div>
                        <div class="form-group">
                            <label>Ibu Kandung</label>
                            <input type="varchar" class="form-control" name="ibu_kandung" required="required" value="{{ $index->ibu_kandung}}"> 
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="varchar" class="form-control" name="jabatan" required="required" value="{{ $index->jabatan }}"> 
                        </div>
                        <div class="form-group">
                            <label>Unit Penempatan</label>
                            <input type="varchar" class="form-control" name="unit_penempatan" required="required" value="{{ $index->unit_penempatan}}"> 
                        </div>
                    </div>
                </div>
            <input class="btn btn-info" type="submit" value="Simpan Data">
            <a href="{{ url('/arsip') }}" class="btn btn-danger"> Kembali </a>
        </form>
        @endforeach
    </section>
@endsection