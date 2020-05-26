<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use Illuminate\Http\Facades\DB;

use App\RuangRapat;



class RuangRapatController extends Controller
{
    public function index()
    {
    	$RuangRapat = \App\RuangRapat::all();
    	return view('interface_admin.RuangRapat',['RuangRapat' => $RuangRapat]);
    }
    public function tambah(Request $request){
    	$ruangrapat = new RuangRapat();
    	$ruangrapat->id = $request->id;
    	$ruangrapat->deskripsi= $request->deskripsi;
    	$ruangrapat->image = $request->image;
    	$ruangrapat->harga= $request->harga;

    	$file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $destination = $request->file("image")->store('');
        $request->file("image")->move("image",$destination);
        $ruangrapat->image= $destination;
        $ruangrapat->save();
        return redirect('admin/RuangRapat')->with('sukses','Data berhasil diinput');

    }

    public function test($id){
        $data = RuangRapat::find($id)->delete();

        return redirect('admin/RuangRapat')->with('sukses','Data berhasi l dihapus');

    }

    public function edit($id){
        $RuangRapat = RuangRapat::find($id);
        // dd($RuangRapat);
        return view('/interface_admin/updateRapat',['RuangRapat'=>$RuangRapat]);
    }

    public function gas(Request $request,$id)
    {
        $RuangRapat = \App\RuangRapat::find($id);
        $file = $request->file('image');
         $filename = $file->getClientOriginalName();
         $destination = $request->file('image')->store('');
         $request->file('image')->move('image',$destination);
         $RuangRapat->image =$destination;
         $RuangRapat->deskripsi=$request->deskripsi;
         $RuangRapat->harga=$request->harga;
         $RuangRapat->save();
         $RuangRapat=\App\RuangRapat::all();
       return view('/interface_admin/RuangRapat',['RuangRapat' =>$RuangRapat]);
    }




}
