<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuangRapat extends Model
{
   	protected $table = 'ruangrapat';
    protected $fillable =['deskripsi','image','harga'];
}
