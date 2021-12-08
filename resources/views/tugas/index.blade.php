@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'DATA TUGAS')

@section('konten')
<!DOCTYPE html>
<html>
<head>

</head>
<body>



	<a href="/tugas/tambah"><button type="button" class="btn btn-primary">Tambah Tugas</button></a>

	<br/>
	<br/>
    <p>Cari Data Tugas :</p>
	<form action="/tugas/cari" method="GET">

		<input type="text" name="cari" placeholder="Cari .." value="{{ old('cari') }}">

		<button type="submit" value="CARI" class="btn btn-info btn-sm">Cari</button>

	</form>
    <br>
	<table class="table table-bordered table-responsive-sm table-striped" >
		<tr>

			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($tugas as $t)
		<tr>

			<td>{{ $t->pegawai_nama }}</td>
			<td>{{ $t->Tanggal }}</td>
			<td>{{ $t->NamaTugas }}</td>
            <td>{{ $t->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->ID }}"><button type="button" class="btn btn-warning btn-sm"><img src="https://img.icons8.com/material-outlined/24/ffffff/edit--v1.png"/> Edit</button></a>

				<a href="/tugas/hapus/{{ $t->ID }}"><button type="button" class="btn btn-danger btn-sm"><img src="https://img.icons8.com/material-outlined/24/ffffff/filled-trash.png"/> Hapus</button></a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $tugas->links()  }}
</body>
</html>
@endsection
