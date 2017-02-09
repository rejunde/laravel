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


include_once 'adminRoutes.php';


Route::group(array('middleware'=>'guest'),function(){
	Route::get('/login', function () {
		return view('front/login');
	});
	Route::post('/login', 'LoginController@login');
});

Route::group(array('middleware'=>array('auth','user')),function(){
	Route::get('/', function () {
		return view('front/contents/indexcontent');
	});

	Route::get('/bookfund',['uses'=>'BookFundController@index']);
	Route::get('/request',['uses'=>'RequestController@index']);
	Route::get('/bookfund/getdata','BookFundController@getFundData');	
	Route::get('/bookfund/bookfunddetails/{id}', [
    'as'   => 'bookfund/bookfunddetails',
    'uses' => 'BookFundController@bookFundDetails'
	]);
});



Route::group(array('middleware'=>'auth'),function(){
	Route::get('/logout', function(){
		Auth::logout();
		return redirect('/login');
	});
});




