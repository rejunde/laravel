<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;
use App\User;

class LoginController extends Controller
{
    //

    public function login(Request $request){
 		
    	if (Auth::attempt(['email' => $request->user_email, 'password' => $request->user_password])) { 

    		if(Auth::user()->usertype_id == 3){
    			return redirect('/administrator/dashboard');
    		}else if(Auth::user()->usertype_id == 2){
    			$error = 0;
    				$data =User::getdetailsdealer()->first()->getAttributes();
    						foreach ($data as $key => $value) {
    							if($value == "" || $value == null){
    								$error++;
    							}
    						}
    				if($data['dealer_flag'] == 0){
    					return redirect('/profile');
    				}else{
    					return redirect('/dealer');
    				}
    			
    		}else if(Auth::user()->usertype_id == 1){
    			return redirect('/');
    		}

        }else{
        	return \Redirect::back()->with('sesserror', ['msg' => "Email and Password doesn't match."]);
        }
    }
}
