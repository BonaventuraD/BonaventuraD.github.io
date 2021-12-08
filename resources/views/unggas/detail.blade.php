@extends('layout.happy')
@section('title', 'Data Unggas')
@section('judulhalaman', 'DETAIL UNGGAS')

@section('konten')
<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<a href="/unggas"> Kembali</a>

	<br/>
	<br/>

	@foreach($unggas as $u)

        <div class="col-sm-3">Nama Unggas </div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <label> {{ $u->namaunggas }}</label> </div>
        <div class="col-sm-3">Jumlah Unggas</div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <label>{{ $u->jumlahunggas }}</label> </div>
        <div class="col-sm-3">Status Kesediaan Unggas </div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <label>{{ $u->tersedia }}</label> <br><br><br></div>




	@endforeach

    <h5>
    <p style="color: red">**note : (ketersediaan)</p> <br>
    Y = YES / TERSEDIA <br>
    N = NO / TIDAK TERSEDIA</h5>
</body>
</html>
@endsection
