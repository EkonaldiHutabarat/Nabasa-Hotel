<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\PemesananMakanan;
class PemesananmakananController extends Controller
{
    public function index(){
    	return redirect('detailmakanan');
    }
    public function create($id_makanan){
    	$id_user=Auth::user()->id;
    	$data=new PemesananMakanan();
    	$data->id_user=$id_user;
    	$data->id_makanan=$id_makanan;
    	$data->save();
		 return redirect()->back()->with('sukses','Pemesanan berhasil');
		
	}
	
}
