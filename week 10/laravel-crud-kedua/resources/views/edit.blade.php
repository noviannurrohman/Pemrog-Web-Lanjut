@extends('master')
<!-- isi title -->
@section('title', 'Edit Data')

<!-- isi bagian judul halaman -->
@section('judul_halaman','Edit Data Mahasiswa')

<!-- isi bagian konten -->
@section('konten')
	<a href="/" class="btn btn-danger">Kembali</a>

	<br/>
	<br/>

	<form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $mahasiswa->id }}"> <br/>
		<div class="form-group">
			<label for="namamhs">Nama</label>
			<input type="text" class="form-control" required="required" name="namamhs" value="{{ $mahasiswa->nama }}"> <br/>
		</div>
		<div class="form-group">
			<label for="nimmhs">NIM</label>
			<input type="number" class="form-control" required="required" name="nimmhs" value="{{ $mahasiswa->nim }}"> <br/>
		</div>
		<div class="form-group">
			<label for="emailmhs">E-mail</label>
			<input type="email" class="form-control" required="required" name="emailmhs" value="{{ $mahasiswa->email }}"> <br/>
		</div>
		<div class="form-group">
			<label for="jurusanmhs">Jurusan</label>
			<input type="text" class="form-control" required="required" name="jurusanmhs" value="{{ $mahasiswa->jurusan }}"> <br/>
		</div>
		<button type="submit" name="edit" class="btn btn-primary float-right">Simpan Data</button>
	</form>

@endsection