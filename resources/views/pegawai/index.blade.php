@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DATA PEGAWAI')

@section('konten')
<!DOCTYPE html>
<html>
<head>

</head>
<body>

    <a href="/tugas/tambah"><button type="button" class="btn btn-primary">Tambah Pegawai Baru</button></a>

	<br/>
	<br/>

	<table class="table table-bordered table-responsive-sm table-striped" >
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}"><button type="button" class="btn btn-warning"><img src="https://img.icons8.com/material-outlined/24/ffffff/edit--v1.png"/> Edit</button></a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}"><button type="button" class="btn btn-danger"><img src="https://img.icons8.com/material-outlined/24/ffffff/filled-trash.png"/> Hapus</button></a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
@endsection
