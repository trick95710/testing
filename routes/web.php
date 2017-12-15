<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return "D1044181031 蕭皓鴻";
});

Route::get('/teachers', 'TeachersController@allteachers');

Route::get('/teachers/{id}', function($id){
	return view('teachers/show')->with('id' , $id);;
})->where('id' ,'[0-9]+');

Route::get('/create', function(){
	return view('teachers/create');
});

Route::resource('/test','TestController');