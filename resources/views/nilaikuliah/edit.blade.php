@extends('layout.happy')
@section('title', 'Data Nilai Kuliah')
@section('judulhalaman', 'DATA NILAI KULIAH')


@section('konten')
<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	@foreach($nilaikuliah as $n)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}

        <div class="col-sm-3">NRP </div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <input type="text" name="nrp" required="required" maxlength="6" value="{{ $n->NRP }}"> </div>
        <div class="col-sm-3">Nilai Angka</div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <input type="number" name="nilaiangka" required="required" value="{{ $n->NilaiAngka }}"> </div>
        <div class="col-sm-3">SKS </div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <input type="number" name="sks" required="required" value="{{ $n->SKS }}"> </div>

        <div class="col-sm-6" style="margin-top: 20px"><button type="submit" class="btn btn-success" value="Simpan Data">Simpan Data</button></div>
        <div class="col-sm-6"></div>
	</form>
	@endforeach


</body>
</html>
@endsection
