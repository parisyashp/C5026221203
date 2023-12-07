@extends('master2')
@section('judulhalaman','Keranjang Belanja')

@section('konten')

	<h3>Tambah Pembelian</h3>

	<a href="/keranjang"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjang/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="kodebarang" class="col-1 col-form-label">KodeBarang</label>
            <div class="col-5">
                <input type="text" class="form-control" id="kodebarang" name="kodebarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-1 col-form-label">Jumlah</label>
            <div class="col-5">
                <input type="text" class="form-control" id="jumlah" name="jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-1 col-form-label">Harga</label>
            <div class="col-5">
                <textarea  class="form-control" id="harga" name="harga"> </textarea>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

@endsection
