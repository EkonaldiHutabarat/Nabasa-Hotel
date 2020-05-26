<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderRuangRapatmodel;

class DaftarPemesananRuangrapatController extends Controller
{
    public function index(){
        
    	$Rap = OrderRuangRapatmodel::all();
    	return view('interface_admin.DaftarPesananRuangRapat', compact('Rap'));
    }
}
