@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'DATA ABSEN')

@section('konten')
<html>

<body>


    <a href="/absen/tambah"><button type="button" class="btn btn-primary">Tambah Absen Baru</button></a>


	<br/>
	<br/>
    <p>Cari Data Absen :</p>
	<form action="/absen/cari" method="GET">

		<input type="text" name="cari" placeholder="Cari .." value="{{ old('cari') }}">

		<button type="submit" value="CARI" class="btn btn-info btn-sm">Cari</button>

	</form>
    <br>
	<table class="table table-bordered table-responsive-sm table-striped" >
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}"><button type="button" class="btn btn-warning btn-sm"><img src="https://img.icons8.com/material-outlined/24/ffffff/edit--v1.png"/> Edit</button></a>

				<a href="/absen/hapus/{{ $a->ID}}"><button type="button" class="btn btn-danger btn-sm"><img src="https://img.icons8.com/material-outlined/24/ffffff/filled-trash.png"/> Hapus</button></a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links()  }}

</body>
@endsection
