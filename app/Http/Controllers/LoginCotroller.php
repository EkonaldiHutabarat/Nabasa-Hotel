<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginCotroller extends Controller
{
    public function validateAutentichate(Request $req){
    	$account = "SELECT email, password, status FROM users";
    	if(($account->email = $req->email) && ($account->password=$req->password)){
    		if($account->status == 'user'){
    			return view('/interface/index');
    		}
    		else if($account->status=='Admin'){
    			return view('/interface_admin/HomeAdmin');
    		}
    	}
    	else{
    		return view('/auth/login');
    	}
    }
}
