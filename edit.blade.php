@extends('layout.happy')
@section('Konten')
	<a href="/absen"> Kembali</a>

	<br/>
    <h3>{{ $status }}</h3>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">
         <div class="container-fluid">

            <div class="row">
                <div class='col-lg'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Nama Pegawai </label>
                        <span class="col-sm-1">:</span>
                        <div class='col-sm-8 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$a->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-3 control-label">Tanggal</label>
                        <span class="col-sm-1">:</span>
                        <div class='col-sm-8 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" required="required" value="{{ $a->Tanggal }}" />
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

            <div class="row mt-3">
                <label for="status" class="col-sm-3 control-label">Status</label>
                <div class="col-1">:</div>
                <div class="col-sm-8">
                    <div class="form-check-inline">
                        <label class="form-check-label" for="h">
                            <input type="radio" id="h" name="status" value="H" @if($a->Status==='H') checked="checked" @endif>
                        HADIR </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="a">
                            <input type="radio" id="a" name="status" value="A" @if($a->Status==='A') checked="checked" @endif>
                        TIDAK HADIR </label>
                    </div>
                </div>
            </div>


		<input type="submit" class="btn btn-primary my-4 form-control" value="Simpan Data">
        </div>

	</form>
	@endforeach

    @endsection
