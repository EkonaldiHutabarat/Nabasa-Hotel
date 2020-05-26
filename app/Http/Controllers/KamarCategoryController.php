<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\fasilitasModel;
use App\FasilitasKategori;

class KamarCategoryController extends Controller
{
    public function kategorikamar()
    {
    	$kategorikamar = Category::all();
        $fasilitas = fasilitasModel::all();
        return view('interface_admin.kategorikamar', ['kategorikamar'=>$kategorikamar, 'fasilitas' => $fasilitas]);
    }
    public function tambah(Request $request){

        // $file = $request->file('image');
        //  $filename = $file->getClientOriginalName();
        //  $destination = $request->file('image')->store('');
        //  $request->file('image')->move('image',$destination);
        //  $kategorikamar->image=$destination;
    	// $kategorikamar=new Category();
        // $kategorikamar->nama=$request->nama;
        // $kategorikamar->jumlah=$request->jumlah;
        // $kategorikamar->save();



         $file = $request->file('image');
         $filename = $file->getClientOriginalName();
         $destination = $request->file('image')->store('');
         $request->file('image')->move('images',$destination);
         $kategorikamar=new Category();
         $kategorikamar->image =$destination;
         $kategorikamar->nama=$request->nama;
         $kategorikamar->jumlah=$request->jumlah;
         $kategorikamar->save();

        foreach ($request->fasilitas as $f) {
            $fasilitasKategori = new FasilitasKategori();
            $fasilitasKategori->id_fasilitas = $f;
            $fasilitasKategori->id_kategori = $kategorikamar->id;
            $fasilitasKategori->save();
        }

        return redirect('admin/kategorikamar')->with('sukses','Data berhasil diinput');
    }
    // public function delete($id){
    //     \App\fasilitasKategori::where('id_kategori','=',$id)->delete();
    //     $kategorikamar = \App\Category::find($id);
    //     $kategorikamar->delete($kategorikamar);
    //     return redirect('admin/kategorikamar')->with('sukses','Data berhasil dihapus');        
    // }


}
