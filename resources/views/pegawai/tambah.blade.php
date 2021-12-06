@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'TAMBAH PEGAWAI')

@section('konten')
<!DOCTYPE html>
<html>
<head>

</head>
<body>


	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="col-sm-3">Nama </div>
        <div class="col-sm-9"> <input type="text" name="nama" required="required"> </div>
        <div class="col-sm-3">Jabatan</div>
        <div class="col-sm-9"> <input type="text" name="jabatan" required="required"> </div>
        <div class="col-sm-3">Umur </div>
        <div class="col-sm-9"> <input type="number" name="umur" required="required"> </div>
        <div class="col-sm-3">Alamat</div>
        <div class="col-sm-9"> <textarea name="alamat" required="required"></textarea> </div>

        <div class="col-sm-6" style="margin-top: 20px"><input type="submit" value="Simpan Data"></div>
        <div class="col-sm-6"></div>
	</form>

</body>
</html>
@endsection
