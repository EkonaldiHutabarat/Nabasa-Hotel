<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembayaranModel extends Model
{
    protected $table = '_bukti_pemabayaran';
    protected $fillable =['id','atasnama','total','image'];
}
