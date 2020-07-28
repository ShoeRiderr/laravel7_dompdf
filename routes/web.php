<?php

use Illuminate\Support\Facades\Route;

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
    
    $id = DB::table('patients_data')->where('pesel', '=', '123')->delete();

    
    //var_dump($patients->visitDate);
    
    return view('welcome');
});

Route::get('pdf-create','PdfController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
