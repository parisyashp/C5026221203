<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChatController extends Controller
{
	public function index()
	{
    	// mengambil data dari table
		//$pegawai = DB::table('sepatu')->get();
        $chat = DB::table('chat')->get();
    	// mengirim data  ke view index
		return view('indexChat',['chat' => $chat]);

	}

    public function show()
    {
        $chat = DB::table('chat')->get();

        $emoticons = [
            ':))' => '1.png',
            ':3' => '2.png',
            ':P' => '3.png',
            ':C' => '4.png',
            ';)' => '5.png',
        ];

        $kata = explode(' ', $chat->pesan);

        foreach ($kata as $index => $word) {
            if (array_key_exists($word, $emoticons)) {
                $kata[$index] = '<img src="' . asset('gambar/' . $emoticons[$word]) . '" alt="' . $word . '" />';
            }
        }

        $kalimat_dengan_gambar = implode(' ', $kata);

        return view('text.show', compact('kalimat_dengan_gambar'));
    }
}
