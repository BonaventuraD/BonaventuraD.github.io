@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'EDIT TUGAS')

@section('konten')
<!DOCTYPE html>
<html>
<head>

</head>
<body>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $t->ID }}"> <br/>

        <div class="col-sm-3">ID Pegawai </div>
        <div class="col-sm-9"> <input type="number" name="IDPegawai" required="required" value="{{ $t->IDPegawai }}"> </div>
        <div class="col-sm-3">Tanggal</div>
        <div class="col-sm-9"> <input type="date" name="Tanggal" required="required" value="{{ $t->Tanggal }}"> </div>
        <div class="col-sm-3">Nama Tugas </div>
        <div class="col-sm-9"> <input type="text" name="NamaTugas" required="required" value="{{ $t->NamaTugas }}"> </div>
        <div class="col-sm-3">Status</div>
        <div class="col-sm-9"> <input type="text" name="Status" required="required" value="{{ $t->Status }}"> </div>

        <div class="col-sm-6" style="margin-top: 20px"><input type="submit" value="Simpan Data"></div>
        <div class="col-sm-6"></div>
	</form>
	@endforeach


</body>
</html>
@endsection
