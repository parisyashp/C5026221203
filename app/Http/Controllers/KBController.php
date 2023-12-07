<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
    	return view('index2',['keranjangbelanja' => $keranjangbelanja]);

    }

    // method untuk hapus data pegawai
	public function batal($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjang');
	}

    // method untuk menampilkan view form tambah pegawai
	public function beli()
	{
		// memanggil view tambah
		return view('beli');

	}

    public function store(Request $request)
	{
		// insert data ke table belanja
		DB::table('keranjangbelanja')->insert([
		    'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman belanja
		return redirect('/keranjang');

	}
}
