<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZakatController extends Controller
{	
	public function kalkulatorzakat(){
    	return view('dashboard.kalkulatorzakat');
    }
    public function kalkulatorzakatmal(){
    	return view('dashboard.kalkulatorzakatmal');
    }
    public function kalkulatorzakatfitrah(){
    	return view('dashboard.kalkulatorzakatfitrah');
    }
    public function kalkulatorzakatpenghasilan(){
    	return view('dashboard.kalkulatorzakatpenghasilan');
    }
    public function kalkulatorzakatpertanian(){
    	return view('dashboard.kalkulatorzakatpertanian');
    }
    public function kalkulatorzakatemas(){
    	return view('dashboard.kalkulatorzakatemas');
    }
}
