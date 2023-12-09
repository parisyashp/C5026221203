@extends('master2')
@section('judulhalaman','Sepatu')
@section('konten')

	<h2>Tugas Pra-EAS</h2>
	<h3>Pegawai</h3>

    <a href="/sepatu/tambah" class="btn btn-primary"> + Tambah Data Baru</a>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Sepatu</th>
			<th>Merk Sepatu</th>
			<th>Stock Sepatu</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($sepatu as $s)
		<tr>
			<td>{{ $s->kodesepatu }}</td>
			<td>{{ $s->merksepatu }}</td>
			<td>{{ $s->stocksepatu }}</td>
			<td>{{ $s->tersedia }}</td>
			<td>
				<a href="/sepatu/view/{{ $s->kodesepatu }}" class=" btn btn-success">View</a>
                |
                <a href="/sepatu/edit/{{ $s->kodesepatu }}" class=" btn btn-warning">Edit</a>
				|
				<a href="/sepatu/hapus/{{ $s->kodesepatu }}" class=" btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{-- <!-- {{ $pegawai->links() }}--> --}}

@endsection
