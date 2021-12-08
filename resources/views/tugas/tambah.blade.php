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
        <div class="container">

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="IDPegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                        <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="Tanggal" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : "id"
                        });
                    });
                </script>
            </div>

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nama Tugas : </label>
                        <div class="col-sm-4 input-group date">
                            <input class="form-control"type="text" name="NamaTugas" required="required">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        Status<br>
        <input type="radio" id="b" name="Status" value="B"checked="checked">
        <label for="b">Belum Selesai</label><br>
        <input type="radio" id="o" name="Status" value="O" >
        <label for="O">On Progress</label><br>
        <input type="radio" id="s" name="Status" value="S" >
        <label for="S">Selesai</label><br>

        <div class="col-sm-6" style="margin-top: 20px"><button type="submit" class="btn btn-success" value="Simpan Data">Simpan Data</button></div>
        <div class="col-sm-6"></div>

	</form>
    </div>
</body>
</html>
@endsection
