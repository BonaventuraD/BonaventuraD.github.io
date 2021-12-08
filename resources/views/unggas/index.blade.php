@extends('layout.happy')
@section('title', 'Data Unggas')
@section('judulhalaman', 'DATA UNGGAS')

@section('konten')
<!DOCTYPE html>
<html>
<head>

</head>
<body>

    <a href="/unggas/tambah"><button type="button" class="btn btn-primary">Tambah Unggas Baru</button></a>

	<br/>
	<br/>
	<p>Cari Data Unggas :</p>
	<form action="/unggas/cari" method="GET">

		<input type="text" name="cari" placeholder="Cari .." value="{{ old('cari') }}">

		<button type="submit" value="CARI" class="btn btn-info btn-sm">Cari</button>

	</form>
    <br>
	<table class="table table-bordered table-responsive-sm table-striped" >
		<tr>
            <th>No</th>
			<th>Nama Unggas</th>
			{{-- <th>Jumlah</th> --}}
            <th>Status Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($unggas as $u)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $u->namaunggas }}</td>
			{{-- <td>{{ $u->jumlahunggas }}</td> --}}
            <td>{{ $u->tersedia }}</td>
			<td>
                <a href="/unggas/detail/{{ $u->kodeunggas }}"><button type="button" class="btn btn-info">View Detail</button></a>

                <a href="/unggas/edit/{{ $u->kodeunggas}}"><button type="button" class="btn btn-warning btn-sm"><img src="https://img.icons8.com/material-outlined/24/ffffff/edit--v1.png"/> Edit</button></a>

				<a href="/unggas/hapus/{{ $u->kodeunggas }}"><button type="button" class="btn btn-danger btn-sm"><img src="https://img.icons8.com/material-outlined/24/ffffff/filled-trash.png"/> Hapus</button></a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $unggas->links()  }}


</body>
</html>
@endsection
