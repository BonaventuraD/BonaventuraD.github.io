<!DOCTYPE html>
<html>
<head>
	<title>Tugas</title>
</head>
<body>


	<h3>Data Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		ID <input type="number" name="ID" required="required"> <br/>
		ID Pegawai <input type="number" name="ID Pegawai" required="required"> <br/>
		Tanggal <input type="date" name="Tanggal" required="required"> <br/>
		Nama Tugas <input type="text" name="Nama Tugas" required="required"> <br/>
        Status <input type="text" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
