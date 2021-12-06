@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'TAMBAH TUGAS')

@section('konten')
<!DOCTYPE html>
<html>
<head>

</head>
<body>



	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>
    <div class="row">
	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
        <div class="col-sm-3">ID Pegawai </div>
        <div class="col-sm-9"> <input type="number" name="IDPegawai" required="required"> </div>
        <div class="col-sm-3">Tanggal</div>
        <div class="col-sm-9"> <input type="date" name="Tanggal" required="required"> </div>
        <div class="col-sm-3">Nama Tugas </div>
        <div class="col-sm-9"> <input type="text" name="NamaTugas" required="required"> </div>
        <div class="col-sm-3">Status</div>
        <div class="col-sm-9"> <input type="text" name="Status" required="required"> </div>

        <div class="col-sm-6" style="margin-top: 20px"><input type="submit" value="Simpan Data"></div>
        <div class="col-sm-6"></div>

	</form>
    </div>
</body>
</html>
@endsection
