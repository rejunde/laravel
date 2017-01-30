<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class LoginController extends Controller
{
    //

    public function login(Request $request){
 		
    		 if (Auth::attempt(['email' => $request->user_email, 'password' => $request->user_password])) {    

            	if(Auth::user()->usertype_id == 3){
            		return redirect()->intended('/administrator');
            	}else{
            		return redirect()->intended('/');
            	}

        }else{
        	dd(1);
        }
    }
}
