<!DOCTYPE html>
<html>
<head>
	<title>Tugas</title>
</head>
<body>


	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $t->ID }}"> <br/>
        ID Pegawai <input type="number" name="IDPegawai" required="required" value="{{ $t->IDPegawai }}"> <br/>
		Tanggal <input type="date" name="Tanggal" required="required" value="{{ $t->Tanggal }}" > <br/>
		Nama Tugas <input type="text" name="NamaTugas" required="required" value="{{ $t->NamaTugas }}"> <br/>
        Status <input type="text" name="Status" required="required" value="{{ $t->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
