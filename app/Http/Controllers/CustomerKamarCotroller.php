<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\OrderRuangRapatmodel;
use\App\PemesananMakanan;
class CustomerKamarCotroller extends Controller
{

    public function customermakanan(){
        // return view('interface.daftarpemesananmakanan');
        $data=PemesananMakanan::select('users.nama','menu_restaurant.deskripsi','menu_restaurant.harga')
    	->join('users','users.id','=','PemesananMakanan.id_user')
    	->join('menu_restaurant','menu_restaurant.id','=','PemesananMakanan.id_makanan')->get();

        return view('interface.daftarpemesananmakanan',['data'=>$data]);
        
    }
    

    public function customerRuangRapat(){
    	$Rap = OrderRuangRapatmodel::all();
    	return view('interface.daftarpemesananRuangRapat', compact('Rap'));
    }

}
