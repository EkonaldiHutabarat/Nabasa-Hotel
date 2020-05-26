<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\DB;


use App\kamar;
use App\Category;


class admincontroller extends Controller
{
    public function index()
    {
    	$data_kamar = kamar::with('category')->get();
        $iterable=Category::all();
    	return view('interface_admin.HomeAdmin',['data_kamar' => $data_kamar,'iterable'=>$iterable]); 
    } 
    public function tambah(Request $request)
    {
       
    	$kamar= new kamar();
        $kamar->nomor_kamar=$request->nomor_kamar;
        $kamar->tipe_kamar=$request->tipe_kamar;
        $kamar->harga=$request->harga;
        $kamar->status=0;
       


        $file = $request->file('images');
        $filename = $file->getClientOriginalName();
        $destination = $request->file("images")->store('');
        $request->file("images")->move("images",$destination);
        $kamar->images= $destination;
        $kamar->save();
       

        return redirect()->route('dashboard')->with('sukses','Data berhasil diinput');
    	
    }
    public function edit($id)
    {
        $kamar = \App\kamar::find($id);
        $iterable=\App\Category::all();
        return view('/interface_admin/editkamar',['kamar' =>$kamar,'iterable'=>$iterable]);
    }

    public function update(Request $request,$id)
    {
        $kamar = \App\kamar::find($id);
        $kamar->update($request->all());
        return redirect()->route('admin/dashboard')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id){
        $kamar = \App\kamar::find($id);
        $kamar ->delete($kamar);
        return redirect('admin/dashboard')->with('sukses','Data berhasil dihapus');        
    }
}
