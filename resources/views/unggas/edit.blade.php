@extends('layout.happy')
@section('title', 'Data Unggas')
@section('judulhalaman', 'EDIT UNGGAS')

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
	<form action="/unggas/update" method="post">
        <input type="hidden" name="id" value="{{ $u->kodeunggas }}"> <br/>
		{{ csrf_field() }}

        <div class="col-sm-3">Nama Unggas </div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <input type="text" name="nama" maxlength="30" required="required" value="{{ $u->namaunggas }}"> </div>
        <div class="col-sm-3">Jumlah Unggas</div>
        <div class="col-sm-1">:</div>
        <div class="col-sm-8"> <input type="number" name="jumlah" required="required" value="{{ $u->jumlahunggas }}"> </div>
        Status Tersedia<br>
        <input type="radio" id="y" name="tersedia" value="Y" @if($u->tersedia==='Y') checked="checked" @endif>
        <label for="Y">YES</label><br>
        <input type="radio" id="n" name="tersedia" value="N" @if($u->tersedia==='N') checked="checked" @endif>
        <label for="N">NO</label><br>


        <button type="submit" class="btn btn-success" value="Simpan Data">Simpan Data</button>
	</form>
	@endforeach


</body>
</html>
@endsection
