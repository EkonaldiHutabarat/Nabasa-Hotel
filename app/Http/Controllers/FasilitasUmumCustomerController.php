<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fasilitasumum;

class FasilitasUmumCustomerController extends Controller
{
    public function fasiUMUM(){
    	$DaftarFasilitas =\App\fasilitasumum::all();
    	return view('interface.facilities',['DaftarFasilitas'=>$DaftarFasilitas,'DaftarFasilitas'=>$DaftarFasilitas]);
    }
}
