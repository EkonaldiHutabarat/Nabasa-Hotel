<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderRuangRapatmodel extends Model
{
    protected $table = "order_ruang_rapat";
    public $fillable =['nama','notlpn','jmlhkursi','start','end','tambahan'];
}