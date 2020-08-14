<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Client;
use Hash;



class AuthController extends Controller
{
    

    public function login(){
    	return view('auth.login_client');
    }


    public function login_post(Request $request){
        if(\Auth::guard('client_web')->attempt(['email' => $request->email , 'password' => 			$request->password])) {
        	// dd('done');
        	return redirect('/');
        }else{
        
        	return back();
        }

    }
     public function register(){
        return view('auth.register_client');
    }

       protected function clientRegister(Request $request)
    {

         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string',  'confirmed'],

            'address' => 'required',
        ]);

        $client = Client::create([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'adress' => $request['adress'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/');
    }




        public function logout (Request $request) {

     		Auth()->guard('client_web')->logout();
     		
     		return redirect('/client/login');



   	 	}
}
