@extends('master2')
@section('judulhalaman','Chat')
@section('konten')

	<h2>EAS kode AA</h2>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
            <th>Pesan</th>
		</tr>
		@foreach($chat as $c)
		<tr>
			<td>{{ $c->id }}</td>
            <td>{{ $c->pesan }}</td>
		</tr>
		@endforeach
	</table>

@endsection
