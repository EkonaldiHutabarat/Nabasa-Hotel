<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class displayKamarController extends Controller
{
    public function displaykamar($id){
        $ids = $id;
    	return view('interface.displaykamar',compact('ids'));
    }
}
