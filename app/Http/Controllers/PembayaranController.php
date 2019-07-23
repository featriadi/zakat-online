<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Zakat;
use Auth;

class PembayaranController extends Controller
{
    public function pembayaran(){
    	$zakats = Zakat::all();

    	return view('pembayaran.index',['zakats' => $zakats]);
    }

    public function store(Request $request)
	{
	// insert data ke table pembayaran
	DB::table('pembayaran')->insert([
		'atas_nama' => $request->atas_nama,
		'zakat_id' => $request->jenis_zakat,
		'jumlah' => $request->jumlah,
		'status' => '0'
	]);
	// alihkan halaman ke halaman pembayaran
	return redirect('/daftarpembayaran');

	}
    public function daftarpembayaran(){
    	// mengambil data dari table pembayaran
    	$pembayaran = DB::table('pembayaran')->get();

    	// mengirim data pembayaran ke view index
    	return view('pembayaran.daftar',['pembayaran' => $pembayaran]);
    }
}
