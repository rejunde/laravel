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



Route::group(array('middleware'=>'guest'),function(){
	Route::get('/login', function () {
		return view('front/login');
	});
	Route::post('/login', 'LoginController@login');
});

Route::group(array('middleware'=>array('auth','admin')),function(){
	Route::get('/administrator/dashboard','Admin_DashboardController@index');

	Route::get('/administrator/request/request_index', 'Admin_RequestController@index');  
	Route::get('/administrator/request/add_request', 'Admin_RequestController@add_request');
	Route::post('/administrator/request/get_all_faculty', 'Admin_RequestController@get_all_faculty');
	Route::post('/administrator/request/get_faculty_byname', 'Admin_RequestController@get_faculty_byname');
	Route::post('/administrator/request/save_request', 'Admin_RequestController@save_request');

	Route::get('/administrator/books/books_index', 'Admin_BooksController@index');  
	
	Route::get('/administrator/appusers/appusers_index', 'Admin_AppUsersController@index'); 
	Route::get('/administrator/appusers/add_users', 'Admin_AppUsersController@add_users');
	
	Route::get('/administrator/budgetfund/budgetfund_index', 'Admin_BudgetFundController@index');  
	
	Route::get('/administrator/reports/reports_index', 'Admin_ReportsController@index'); 
});


Route::group(array('middleware'=>'auth'),function(){
	Route::get('/logout', function(){
		Auth::logout();
		return redirect('/login');
	});
});




