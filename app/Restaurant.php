<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'menu_restaurant';
    protected $fillable =['image','deskripsi','harga'];
}
