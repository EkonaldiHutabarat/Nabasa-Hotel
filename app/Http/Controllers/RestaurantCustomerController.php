<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantCustomerController extends Controller
{
    public function Hidangan(){
    	$Daftar=\App\Restaurant::all();
    	return view('interface.restaurant',['Daftar'=>$Daftar,'Daftar'=>$Daftar])->with('sukses','Pemesanan berhasil');
    }
}
