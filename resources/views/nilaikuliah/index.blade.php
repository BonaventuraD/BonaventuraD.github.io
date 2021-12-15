@extends('layout.happy')
@section('title', 'Data Nilai Kuliah')
@section('judulhalaman', 'DATA NILAI KULIAH')

@section('konten')
<!DOCTYPE html>
<html>
<head>

</head>
<body>

    <a href="/nilaikuliah/tambah"><button type="button" class="btn btn-primary">Tambah Nilai Baru</button></a>

	<br/>
	<br/>


	<table class="table table-bordered table-responsive-sm table-striped" >
		<tr>
            <th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
			<th>Opsi</th>
		</tr>

		@foreach($nilaikuliah as $n)
		<tr>
            <td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
			    @if ($n->NilaiAngka <= 40) <td>D</td>
            @elseif (($n->NilaiAngka >= 41) & ($n->NilaiAngka <= 60))<td>C</td>
            @elseif (($n->NilaiAngka >= 61) & ($n->NilaiAngka <= 80))<td>B</td>
            @else ($n->NilaiAngka >= 81)<td>A</td>
            @endif

            <td>{{(($n->NilaiAngka)*($n->SKS))}}</td>
			<td>

                <a href="/nilaikuliah/edit/{{ $n->ID }}"><button type="button" class="btn btn-warning btn-sm"><img src="https://img.icons8.com/material-outlined/24/ffffff/edit--v1.png"/> Edit</button></a>

				<a href="/nilaikuliah/hapus/{{ $n->ID }}"><button type="button" class="btn btn-danger btn-sm"><img src="https://img.icons8.com/material-outlined/24/ffffff/filled-trash.png"/> Hapus</button></a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $nilaikuliah->links()  }}


</body>
</html>
@endsection
