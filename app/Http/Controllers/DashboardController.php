<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('dashboard.index');
    }
    public function tentangzakat(){
        return view('dashboard.tentangzakat');
    }
    public function kontak(){
        return view('dashboard.kontak');
    }
}
