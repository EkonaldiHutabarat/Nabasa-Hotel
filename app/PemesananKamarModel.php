<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemesananKamarModel extends Model
{
     protected $table='_customer_order';
     protected $fillable =['id','nama','id_kamar','tanggal_check_in','bulan_check_in','tahun_check_in','tanggal_check_out','bulan_check_out','tahun_check_out','KTP','tambahan','status'];
}
