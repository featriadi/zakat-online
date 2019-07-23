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
			'user_id' => $request->user_id,
			'status' => '0'
		]);
		
		// alihkan halaman ke halaman pembayaran
		return redirect('/daftarpembayaran');
	}
	
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pembayaran = DB::table('pembayaran')->where('id',$id)->get();

		// passing data pegawai yang didapat ke view edit.blade.php
		return view('pembayaran.edit',['pembayaran' => $pembayaran]);
	}

	public function update(Request $request)
	{
		// update data pegawai
		DB::table('pembayaran')->where('id',$request->id)->update([
			'zakat_id' => $request->zakat_id,
			'atas_nama' => $request->atas_nama,
			'jumlah' => $request->jumlah,
			'status' => $request->status
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/daftarpembayaran');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pembayaran')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/daftarpembayaran');
	}

    public function daftarpembayaran(){
    	if (Auth::user()->role == 'admin') {
    		# code...
    		$pembayaran = DB::table('pembayaran')->get();
    	}
    	elseif (Auth::user()->role == 'member') {
    		# code...
    		// mengambil data dari table pembayaran
	    	$id = Auth::user()->id;
	    	$pembayaran = DB::table('pembayaran')->where('user_id',$id)->get();
    	}
    	
    	// mengirim data pembayaran ke view index
    	return view('pembayaran.daftar',['pembayaran' => $pembayaran]);
    }
}
