<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PemesananKamarModel;

class DaftarPemesananKamar extends Controller
{
    public function index(){
    	$data = PemesananKamarModel::all();
    	return view('interface_admin.DaftarPesananKamar', compact('data'));
    }
}
