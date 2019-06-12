@extends('pasien.layout')

@section('title')
Tambah Data pasien
@endsection

@section('content')
<a href="{{ url('pasien') }}" class="btn btn-success btn-sm">
	Daftar pasien
</a>
<form method="post" action="{{ url('pasien') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>nama</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>jenis kelamin</label>
		<input type="text" name="jeniskelamin" class="form-control">
	</div>
	<div class="form-group">
		<label>tempat lahir</label>
		<input type="text" name="tempatlahir" class="form-control">
	</div>
	<div class="form-group">
		<label>umur</label>
		<input type="text" name="umur" class="form-control">
	</div>
	<div class="form-group">
		<label>pekerjaan</label>
		<input type="text" name="pekerjaan" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
@endsection