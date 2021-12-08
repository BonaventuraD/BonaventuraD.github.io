@extends('layout.happy')
@section('title', 'Data Unggas')
@section('judulhalaman', 'TAMBAH UNGGAS')

@section('konten')
<!DOCTYPE html>
<html>
<head>

</head>
<body>


	<a href="/unggas"> Kembali</a>

	<br/>
	<br/>

	<form action="/unggas/store" method="post">
		{{ csrf_field() }}

        <div class="col-sm-3">Nama Unggas </div>
        <div class="col-sm-9"> <input type="text" maxlength="30" name="nama" required="required"> </div>
        <div class="col-sm-3">Jumlah Unggas</div>
        <div class="col-sm-9"> <input type="number" name="jumlah" required="required"> </div>

        Status Tersedia<br>
        <input type="radio" id="y" name="tersedia" value="Y"checked="checked">
        <label for="Y">YES</label><br>
        <input type="radio" id="n" name="tersedia" value="N" >
        <label for="N">NO</label><br>

        <div class="col-sm-6" style="margin-top: 20px"><button type="submit" class="btn btn-success" value="Simpan Data">Simpan Data</button></div>
        <div class="col-sm-6"></div>
	</form>

</body>
</html>
@endsection
