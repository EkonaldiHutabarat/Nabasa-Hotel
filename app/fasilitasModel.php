<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitasModel extends Model
{
    protected $table = 'fasilitas';
    protected $fillable =['id', 'nama_fasilitas'];
}
