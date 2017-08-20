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
	return view('home', ['title' => 'Home', 'scripts' => []]);
});


Route::get('register/pages/{type}', function ($type){
	switch ($type)
	{
		case 'doner':
			return view('authenticate.doner.doner_register', ['title' => 'Register Doner', 'scripts'=> []]);
			break;

		case 'hospital':
			return view('authenticate.hospital.hospital_register', ['title' => "Register your hospital", 'scripts' => []]);
			break;

		case 'blood_bank':
			return view('authenticate.blood_bank.blood_bank_register', ['title' => "Register your blood bank", 'scripts' => []]);
			break;
	}
})->name('register/pages');

Route::get('auth/login', function (){

})->name('auth/login');
