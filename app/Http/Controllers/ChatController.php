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

}
