<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(Request $request)
    {
    	// return dd($request);
    	if(Auth::attempt(
    		[
    			'email'=>$request->email,
    			'password'=>$request->password,
    		]
    	)){
    		if(user::where('email',$request->email)->first()->is_admin()){
    			return redirect()->route('dashboard');
    		}
    		return redirect()->route('customer');
    	}
    	return redirect()->back();
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }
}
