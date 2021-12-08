@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'EDIT TUGAS')

@section('konten')
<!DOCTYPE html>
<html>
<head>

</head>
<body>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
        <div class="container">

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="IDPegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$t->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
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
                            <input type='text' class="form-control" name="Tanggal" required="required" value="{{ $t->Tanggal }}">
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
                            <input class="form-control"type="text" name="NamaTugas" required="required" value="{{ $t->NamaTugas }}">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        Status<BR>
            <input type="radio" id="b" name="Status" value="B" @if($t->Status==='B') checked="checked" @endif>
            <label for="b">Belum Selesai</label><br>
            <input type="radio" id="o" name="Status" value="O" @if($t->Status==='O') checked="checked" @endif>
            <label for="O">On Progress</label><br>
            <input type="radio" id="s" name="Status" value="S" @if($t->Status==='S') checked="checked" @endif>
            <label for="S">Selesai</label><br>

        <div class="col-sm-6" style="margin-top: 20px"><button type="submit" class="btn btn-success" value="Simpan Data">Simpan Data</button></div>
        <div class="col-sm-6"></div>
	</form>
	@endforeach


</body>
</html>
@endsection
