<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('front/contents/indexcontent');
});

Route::get('/administrator/{admin?}', function ($admin = null) {

	if(isset($admin)){

		if($admin == "dashboard"){
			return view('admin/contents/admindashboard');
		}else if($admin == "login"){
			return view('admin/contents/adminlogin');
		}

	}
	return view('admin/contents/adminindex');    
});

