<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zakat extends Model
{
    //
    protected $table = 'zakats';
    protected $fillable = ['nama_zakat','deskripsi'];
}
