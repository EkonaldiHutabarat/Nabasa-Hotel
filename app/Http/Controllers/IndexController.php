<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facades\DB;

use App\Category;
use App\fasilitasKategori;

class IndexController extends Controller
{
	 public function index()
    {
        $datakategori=\App\Category::all();
        $fasilitasKat=\App\fasilitasKategori::all();
    	return view('interface.index',['datakategori'=>$datakategori,'fasilitasKat'=>$fasilitasKat]); 
    } 
}
