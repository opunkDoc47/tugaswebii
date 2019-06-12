@extends('pasien.layout')

@section('title')
Ubah Data pasien
@endsection

@section('content')
<a href="{{ url('pasien') }}" class="btn btn-success btn-sm">
	Daftar pasien
</a>
<form method="post" action="{{ url('pasien/'.$pasien->id) }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>nama</label>
		<input type="text" name="nama" value="{{ $pasien->nama }}" class="form-control">
	</div>
	<div class="form-group">
		<label>jenis kelamin</label>
		<input type="text" name="jeniskelamin" value="{{ $pasien->jeniskelamin }}" class="form-control">
	</div>
	<div class="form-group">
		<label>tempat lahir</label>
		<input type="text" name="tempatlahir" value="{{ $pasien->tempatlahir }}" class="form-control">
	</div>
	<div class="form-group">
		<label>umur</label>
		<input type="text" name="umur" value="{{ $pasien->umur }}" class="form-control">
	</div>
	<div class="form-group">
		<label>pekerjaan</label>
		<input type="text" name="pekerjaan" value="{{ $pasien->pekerjaan }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamt" value="{{ $pasien->alamat }}" class="form-control">
	</div>
	<button type="submit" class="btn btn-warning btn-block">
		Ubah Data
	</button>
</form>
@endsection