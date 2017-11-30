<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function addAdmin(){
    	return view ("adminRegister");
    }

    public function storeAdmin(Request $request){
    	$this->validate($request, [
    		'first_name' => 'required|string|max:40',
            'last_name' => 'required|string|max:40',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
    	]);

    	User::create([
            'first_name'=> $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'type' => 2
        ]);

        return redirect("/");
    }
}
