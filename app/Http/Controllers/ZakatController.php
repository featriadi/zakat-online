<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZakatController extends Controller
{	
	public function kalkulatorzakat(){
    	return view('dashboard.kalkulatorzakat');
    }
    public function kalkulatorzakatemas(){
    	return view('dashboard.kalkulatorzakatemas');
    }
}
