<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kamar;
use DB;


class PemesananKamarController extends Controller
{
    public function index($id)
    {
    	$databooking = kamar::where('tipe_kamar','=',$id)->get();
    	return view('interface.detailsRoom',['databooking' => $databooking]); 
    }
    
}
