<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $table = 'kamar';
    protected $fillable =[
    	'nomor_kamar',
    	'tipe_kamar',
    	'harga',
        'images',
        'status'
    ];
    public function comments()
    {
    	return $this->hasMany('App\Comment');

    }
    public function category()
    {
    	return $this->belongsTo(Category::class,'kategoryID');
    }
}

