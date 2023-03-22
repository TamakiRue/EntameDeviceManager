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
use App\Http\Controllers\Entame_Users_Controller;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home',[Entame_Users_Controller::classm,'view_entameuser']);