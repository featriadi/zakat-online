<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZakatController extends Controller
{
    public function kalkulatoremas(){
    	return view('dashboard.kalkulatoremas');
    }
}
