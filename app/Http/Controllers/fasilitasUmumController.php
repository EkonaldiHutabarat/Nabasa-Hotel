<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fasilitasumum;

class fasilitasUmumController extends Controller
{
    public function umum(){
    	$fasilitasumum = \App\fasilitasumum::all();
       return view('interface_admin.fasilitasumum',['fasilitasumum'=>$fasilitasumum]);
   }
    public function add(Request $request)
    {

         $file = $request->file('image');
         $filename = $file->getClientOriginalName();
         $destination = $request->file('image')->store('');
         $request->file('image')->move('image',$destination);
         $fasilitasumum=new fasilitasumum();
         $fasilitasumum->image =$destination;
         $fasilitasumum->namafasilitasumum=$request->namafasilitasumum;
         $fasilitasumum->save();

         $fasilitasumum = fasilitasumum::all();
         // return view('interface_admin.fasilitasumum', compact('data'));

        return view('interface_admin.fasilitasumum',['fasilitasumum'=>$fasilitasumum]);
    }

    public function test($id){
        $data = fasilitasumum::find($id)->delete();

        return redirect('admin/fasilitasumum')->with('sukses','Data berhasi l dihapus');

    }
    
}
