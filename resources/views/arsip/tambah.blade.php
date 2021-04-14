@extends('layouts.app')

@section('title')
Dashboard
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>BUAT ARSIP</h1>
    </div>
	<div class="section-body">
		<form action="{{ url('/arsip/proses') }}" method="post">
		{{ csrf_field() }}
			<div class="card-body">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" class="form-control" name="nama" required="required"> 
				</div>
				<div class="form-group">
					<label>NIP</label>
					<input type="number" class="form-control" name="nip" required="required"> 
				</div>
				<div class="form-group">
					<label>NIK</label>
					<input type="number" class="form-control" name="nik" required="required"> 
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" class="form-control" name="alamat" required="required"> 
				</div>
				<div class="form-group">
					<label>Tgl Lahir</label>
					<input type="date" class="form-control" name="tanggal_lahir" required="required"> 
				</div>
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input type="varchar" class="form-control" name="tempat_lahir" required="required"> 
				</div>
				<div class="form-group">
					<label>Jenis Kelamin</label>
					<input type="varchar" class="form-control" name="jenis_kelamin" required="required"> 
				</div>
				<div class="form-group">
					<label>Ibu Kandung</label>
					<input type="varchar" class="form-control" name="ibu_kandung" required="required"> 
				</div>
				<div class="form-group">
					<label>Jabatan</label>
					<input type="varchar" class="form-control" name="jabatan" required="required"> 
				</div>
				<div class="form-group">
					<label>Unit Penempatan</label>
					<input type="varchar" class="form-control" name="unit_penempatan" required="required"> 
				</div>
				<input class="btn btn-info" type="submit" value="Simpan Data">
				<a href="{{ url('/arsip') }}" class="btn btn-danger"> Kembali </a>
			</div>
		</form>	  
  	</div>
</section>

@endsection