@extends('master2')
@section('judulhalaman','Sepatu')

@section('konten')

	<h3>Tambah Stock</h3>

	<a href="/sepatu">Kembali</a>

	<br/>
	<br/>

	<form action="/sepatu/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="merksepatu" class="col-1 col-form-label">Merk Sepatu</label>
            <div class="col-5">
                <input type="text" class="form-control" id="merksepatu" name="merksepatu">
            </div>
        </div>
        <div class="form-group row">
            <label for="stocksepatu" class="col-1 col-form-label">Stock sepatu</label>
            <div class="col-5">
                <textarea  class="form-control" id="stocksepatu" name="stocksepatu"> </textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-1 col-form-label">Tersedia</label>
            <div class="col-5">
                <textarea  class="form-control" id="tersedia" name="tersedia"> </textarea>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
