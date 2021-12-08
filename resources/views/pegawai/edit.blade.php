@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'EDIT PEGAWAI')

@section('konten')
<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}

        <div class="col-sm-3">Nama </div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <input type="text" name="nama" required="required" value="{{ $p->pegawai_nama }}"> </div>
        <div class="col-sm-3">Jabatan</div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <input type="text" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}"> </div>
        <div class="col-sm-3">Umur </div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <input type="number" name="umur" required="required" value="{{ $p->pegawai_umur }}"> </div>
        <div class="col-sm-3">Alamat</div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <textarea name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea> </div>

        <div class="col-sm-6" style="margin-top: 20px"><button type="submit" class="btn btn-success" value="Simpan Data">Simpan Data</button></div>
        <div class="col-sm-6"></div>
	</form>
	@endforeach


</body>
</html>
@endsection
