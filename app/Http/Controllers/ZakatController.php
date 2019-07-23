<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZakatController extends Controller
{
    //
    public function kalkulatorzakat(){
    	return view('kalkulatorzakat.index');
    }
    public function kalkulatorzakatmal(){
    	return view('kalkulatorzakat.mal');
    }
    public function kalkulatorzakatfitrah(){
    	return view('kalkulatorzakat.fitrah');
    }
    public function kalkulatorzakatpenghasilan(){
    	return view('kalkulatorzakat.penghasilan');
    }
    public function kalkulatorzakatpertanian(){
    	return view('kalkulatorzakat.pertanian');
    }
    public function kalkulatorzakatemas(){
    	return view('kalkulatorzakat.emas');
    }
}
