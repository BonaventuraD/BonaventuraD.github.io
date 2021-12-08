@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DETAIL PEGAWAI')

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

        <div class="col-sm-3">Nama </div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <label> {{ $p->pegawai_nama }}</label> </div>
        <div class="col-sm-3">Jabatan</div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <label>{{ $p->pegawai_jabatan }}</label> </div>
        <div class="col-sm-3">Umur </div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <label>{{ $p->pegawai_umur }}</label> </div>
        <div class="col-sm-3">Alamat</div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <label>{{ $p->pegawai_alamat }}</label> </div>



	@endforeach


</body>
</html>
@endsection
