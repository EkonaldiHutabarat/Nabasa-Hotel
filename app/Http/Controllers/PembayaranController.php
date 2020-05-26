<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PembayaranModel;

class PembayaranController extends Controller
{
    public function index(){
    	$PembayaranModel = \App\PembayaranModel::all();
    	return view('interface.pembayaran',['PembayaranModel'=>$PembayaranModel]);
    }
    public function add(Request $request)
{           

        $PembayaranModel = \App\PembayaranModel::all();
		 $file = $request->file('image');
         $filename = $file->getClientOriginalName();
         $destination = $request->file('image')->store('');
         $request->file('image')->move('image',$destination);
         $PembayaranModel=new PembayaranModel();
         $PembayaranModel->image =$destination;
         $PembayaranModel->atasnama=$request->atasnama;
         $PembayaranModel->total=$request->total;
         $PembayaranModel->save();
         return redirect('/index')->with('sukses','Bukti pembayaran Behrhasil dikirim');

    }
   
    
}
