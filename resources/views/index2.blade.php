@extends('master2')
@section('judulhalaman','Keranjang Belanja')
@section('konten')

	<h2>Latihan EAS Tahun Lalu</h2>
	<h3>Keranjang Belanja</h3>

    <a href="/keranjang/beli" class="btn btn-primary"> + Beli</a>

	<table class="table table-striped table-hover">
		<tr>
			<th>KodePembelian</th>
			<th>KodeBarang</th>
			<th>JumlahPembelian</th>
			<th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $kb)
		<tr>
			<td>{{ $kb->ID }}</td>
			<td>{{ $kb->KodeBarang }}</td>
			<td>{{ $kb->Jumlah }}</td>
            <td>{{ number_format($kb->Harga, 2, ',', '.') }}</td>
            <td>{{ number_format($kb->Harga * $kb->Jumlah, 2, ',', '.') }}</td>
			<td>
				<a href="/keranjang/batal/{{ $kb->ID }}" class=" btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{-- {{ $keranjangbelanja->links() }} --}}

@endsection
