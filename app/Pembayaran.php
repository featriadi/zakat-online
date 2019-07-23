<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    //
    protected $table = 'pembayaran';
    protected $fillable = ['atas_nama','jumlah','zakat_id','users_id','status'];
}
