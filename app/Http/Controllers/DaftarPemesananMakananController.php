<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PemesananMakanan;
class DaftarPemesananMakananController extends Controller
{
    public function index(){
    	$data=PemesananMakanan::select('users.nama','menu_restaurant.deskripsi','menu_restaurant.harga')
    	->join('users','users.id','=','PemesananMakanan.id_user')
    	->join('menu_restaurant','menu_restaurant.id','=','PemesananMakanan.id_makanan')->get();

    	return view('interface_admin.DaftarPesananMakanan',['data'=>$data]);
    	
	}
	
}
