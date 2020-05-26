<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MenuResCategory;
class KategorimenuResController extends Controller
{
    public function index(){
		$menuKategori =\App\MenuResCategory::all();
    	return view('interface_admin.menu',['menuKategori' => $menuKategori]);
	}
	public function tambah(Request $request){
		$menuKategori=new MenuResCategory();
        $menuKategori->namamenu=$request->namamenu;
        $menuKategori->save();        
        return redirect('admin/menu')->with('sukses','Data berhasil diinput');
	}
	public function test($id){
		$data = MenuResCategory::find($id)->delete();

        return redirect('admin/menu')->with('sukses','Data berhasi	l dihapus');        
   

	}
}
