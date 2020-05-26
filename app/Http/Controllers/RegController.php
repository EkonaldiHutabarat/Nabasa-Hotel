<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class RegController extends Controller
{
    public function createUser(Request $request){
         $user = new user();
         $user->nama = $request->nama;
         $user->no_hp = $request->no_telp;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->status = "user";
         $user->save();
         return redirect("index"); 
    }
    public function createAdmin(Request $request){
         $user = new user();
         $user->nama = $request->nama;
         $user->no_hp = $request->no_telp;
         $user->email = $request->email;
         $user->password = $request->password;
         $user->status = "Admin";
         $user->save();
         return redirect("/admin/dashboard"); 
    }
    public function FormcreateAdmin(){
        return view('/interface_admin/register');
    }
}
