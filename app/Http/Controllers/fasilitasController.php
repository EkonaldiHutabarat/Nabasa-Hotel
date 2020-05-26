<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\fasilitasModel;

class fasilitasController extends Controller
{
    public function index(){
    	$kategorifasilitas = \App\fasilitasModel::all();
       return view('interface_admin.fasilitas',['kategorifasilitas'=>$kategorifasilitas]);
    }
    public function tambah(Request $request){
    	$kategorifasilitas=new fasilitasModel();
        $kategorifasilitas->nama_fasilitas=$request->namafasilitas;
        $kategorifasilitas->save();        
        return redirect('admin/fasilitas')->with('sukses','Data berhasil diinput');
    }
    public function test($id){
		$data = fasilitasModel::find($id)->delete();

        return redirect('admin/fasilitas')->with('sukses','Data berhasi	l dihapus');        
   

	}
}
