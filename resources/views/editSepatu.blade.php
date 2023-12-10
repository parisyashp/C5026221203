@extends('master2')
@section('judulhalaman','Sepatu')

@section('konten')

	<h3>Edit Daftar Sepatu</h3>

	<a href="/sepatu" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepatu as $s)
	<form action="/sepatu/update" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="merksepatu" class="col-sm-2 col-form-label">Merk Sepatu</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" id="merksepatu" required="required" name="merksepatu" value="{{ $s->merksepatu }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stocksepatu" class="col-sm-2 col-form-label">Stock Sepatu</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="stocksepatu" required="required" name="stocksepatu" value="{{ $s->stocksepatu }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="tersedia"required="required" name="tersedia">{{ $s->tersedia }}</textarea>
                </div>
        </div>
		<input type="hidden" name="kodesepatu" value="{{ $s->kodesepatu }}"> <br/>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

    @endsection
