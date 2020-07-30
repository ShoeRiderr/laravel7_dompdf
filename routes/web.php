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

/*Route::get('/', function () {
    $errorMessage = "Something go wrong";
    return view('welcome', ['name' => 'Kamil']);

});*/
Route::resource('/', 'PatientController');

/*Route::get('/about', function() {
    return view('pages.about');
});

Route::get('/users/{id}', function($id) {
    return "this is ".$id;
});*/

Route::resource('registration', 'PatientController');
Route::resource('patientData', 'PatientController');
Route::resource('editPatient', "PatientController");
Route::get('pdf-create','PdfController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
