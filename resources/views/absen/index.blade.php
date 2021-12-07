@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'DATA ABSEN')

@section('konten')
<html>

<body>


    <a href="/tugas/tambah"><button type="button" class="btn btn-primary">Tambah Absen Baru</button></a>


	<br/>
	<br/>

	<table class="table table-bordered table-responsive-sm table-striped" >
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}"><button type="button" class="btn btn-warning"><img src="https://img.icons8.com/material-outlined/24/ffffff/edit--v1.png"/> Edit</button></a>
				|
				<a href="/absen/hapus/{{ $a->ID}}"><button type="button" class="btn btn-danger"><img src="https://img.icons8.com/material-outlined/24/ffffff/filled-trash.png"/> Hapus</button></a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
@endsection
