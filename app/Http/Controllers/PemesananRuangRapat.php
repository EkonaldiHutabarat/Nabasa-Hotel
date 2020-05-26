<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RuangRapat;
use App\OrderRuangRapatmodel;

class PemesananRuangRapat extends Controller
{
    public function index(){
		$conference =\App\RuangRapat::all();
        return view('interface.conference',['conference'=>$conference]);
    }
    public function addbooking(Request $request){
        
		$RuangRapat=new OrderRuangRapatmodel();
        $RuangRapat->nama=$request->nama;
        $RuangRapat->notlpn=$request->notlpn;
        $RuangRapat->jmlhkursi=$request->jmlhkursi;
        $RuangRapat->start=$request->start;
        $RuangRapat->end=$request->end;
        $RuangRapat->tambahan=$request->tambahan;
        $RuangRapat->save();
        return redirect('conference')->with('sukses','Ruang Rapat berhasil Dibooking');
        
    }
} 

