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

	<form action="/nilaikuliah/store" method="post">
		{{ csrf_field() }}

        <div class="col-sm-3">NRP </div>
        <div class="col-sm-9"> <input type="text" name="nrp" maxlength="6" required="required"> </div>
        <div class="col-sm-3">Nilai Angka</div>
        <div class="col-sm-9"> <input type="number" name="nilaiangka" required="required"> </div>
        <div class="col-sm-3">SKS </div>
        <div class="col-sm-9"> <input type="number" name="sks" required="required"> </div>


        <div class="col-sm-6" style="margin-top: 20px"><button type="submit" class="btn btn-success" value="Simpan Data">Simpan Data</button></div>
        <div class="col-sm-6"></div>
	</form>

</body>
</html>
@endsection
