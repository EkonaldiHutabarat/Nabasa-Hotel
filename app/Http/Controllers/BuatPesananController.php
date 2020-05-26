<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PemesananKamarModel;
use App\kamar;
use Illuminate\Support\Facades\Auth;

class BuatPesananController extends Controller
{


	public function index(){
		$id=Auth::id();
        $data = PemesananKamarModel::where('id_user','=',$id)->get();
    	return view('interface.daftarpesanankamar', compact('data'));
	}

    public function buatpesanan(Request $request,$ids){	
        
        $daftar =new PemesananKamarModel();
        $daftar->nama=$request->nama;
        $daftar->id_kamar=$ids;
        $daftar->ktp=$request->ktp;
        $daftar->tanggal_check_in=$request->tanggal_check_in;
        $daftar->bulan_check_in=$request->bulan_check_in;
        $daftar->tahun_check_in=$request->tahun_check_in;
        $daftar->tanggal_check_out=$request->tanggal_check_out;
        $daftar->bulan_check_out=$request->bulan_check_out;
        $daftar->tahun_check_out=$request->tanggal_check_out;
        $daftar->tambahan=$request->tambahan;
        $daftar->id_user=Auth::id();        
        $daftar->save();

        $id=Auth::id();
        $data = PemesananKamarModel::where('id_user','=',$id)->get();
        $var = kamar::find($ids);
        $var->status = 1;
        $var->save();
    	return view('interface.daftarpesanankamar', compact('data'));
    }
    public function test($id){
		$data = PemesananKamarModel::find($id)->delete();

        return redirect('/daftarpesanankamar')->with('sukses','Data berhasi	l dihapus');
    }
    
    public function konfirmasi($id){
        return "sasdas";
    }
}
