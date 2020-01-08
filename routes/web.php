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
<<<<<<< HEAD
Route::get('/', function () {
	    return view('index');
})->name('home');

// Route::prefix('admin')->group(function (){
// 	Route::get('/baitap1/{ketqua1}', function ($ketqua1) {
// 	    return "ket qua:" . $ketqua1;
// 	});
// 	Route::get('/baitap2/{ketqua2}', function () {
// 	    return "ket qua:";
// 	});
	
// });
// Route::get('profile/{id}', 'UserController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> b3fe5fbc6b87b6368a4ccfd696a43e32bc666279
