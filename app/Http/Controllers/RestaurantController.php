<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
class RestaurantController extends Controller
{
	public function index(){
		$Restaurant =\App\Restaurant::all();
    	return view('interface_admin.Restaurant', ['Restaurant'=>$Restaurant, 'Restaurant' => $Restaurant]);
	}

	 public function tambah(Request $request)
    {
    	 $file = $request->file('image');
         $filename = $file->getClientOriginalName();
         $destination = $request->file('image')->store('');
         $request->file('image')->move('image',$destination);
         $Restaurant=new Restaurant();
         $Restaurant->image =$destination;
         $Restaurant->deskripsi=$request->deskripsi;
         $Restaurant->harga=$request->harga;
         $Restaurant->save();
        return redirect('admin/Restaurant')->with('sukses','Data berhasil diinput');
    }
    public function test($id){
        $data = Restaurant::find($id)->delete();

        return redirect('admin/Restaurant')->with('sukses','Data berhasi l dihapus');

    }


    public function edit($id)
    {
        $Restaurant = \App\Restaurant::find($id);
        return view('/interface_admin/updatehidangan',['Restaurant' =>$Restaurant]);
    }

    public function update(Request $request,$id)
    {
        $Restaurant = \App\Restaurant::find($id);
        $file = $request->file('image');
         $filename = $file->getClientOriginalName();
         $destination = $request->file('image')->store('');
         $request->file('image')->move('image',$destination);
         $Restaurant->image =$destination;
         $Restaurant->deskripsi=$request->deskripsi;
         $Restaurant->harga=$request->harga;
         $Restaurant->save();
         $Restaurant=\App\Restaurant::all();
       return view('/interface_admin/Restaurant',['Restaurant' =>$Restaurant]);
    }
     
}
