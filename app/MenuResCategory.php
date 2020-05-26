<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuResCategory extends Model
{
	protected $table ='menucategori'; 
    protected $fillable =['IDmenu','namamenu'];
}
