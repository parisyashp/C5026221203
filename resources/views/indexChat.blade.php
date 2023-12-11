@extends('master2')
@section('judulhalaman','Chat')
@section('konten')

@foreach ($chat as $c)
<div>
    @php
        $emoji= [
            ':))' => '1.png',
            ':3'  => '2.png',
            ':P'  => '3.png',
            ':C'  => '4.png',
            ';)'  => '5.png',
        ];
        // memecah pesan menjadi array kata-kata
        $kalimat = explode(' ', $c->pesan);
        // menggantikan kata-kata tertentu dengan gambar
        $kalimat = array_map(function($kata) use ($emoji) {
            return isset($emoji[$kata]) ? '<img src="' . asset('/' . $emoji[$kata]) . '" alt="' . $kata . '" style="max-width: 37px; max-height: 37px;" />' : $kata;
        }, $kalimat);
        $c->chat_pesan = implode(' ', $kalimat);
    @endphp

    {!! $c->chat_pesan !!}
</div>
@endforeach
</div>
@endsection
