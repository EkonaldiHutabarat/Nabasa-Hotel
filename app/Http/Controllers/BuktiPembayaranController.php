<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PembayaranModel;

class BuktiPembayaranController extends Controller
{
    public function index(){
    	$PembayaranModel = \App\PembayaranModel::all();
    	return view('interface_admin.BuktiTransfer',['PembayaranModel'=>$PembayaranModel]);
    }
    public function test($id){
		$data = PembayaranModel::find($id)->delete();

        return redirect('admin/BuktiTransfer')->with('sukses','Data berhasi	l dihapus');        

	}
    
}
