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
    return view('welcome1');
});

Route::get('/search', function () {
    return view('psychology/search');
});

Route::get('introduction',function (){
    return view('procedure');
});

Route::get('psych',function (){
    return view('psych');
});

Route::get('/deletewat', function () {
    return view('psychology/wat/deletewat');
});



Route::get('wat','WatController@index');

Route::get('wat/create','WatController@create');

Route::post('/WATS','WatController@store');

Route::POST('/search/','WatController@search');

Route::get('imain','InterviewController@index');

Route::get('tat_test','TatController@index');

Route::POST('/deletewat','WatController@destroy');

Route::get('/logout','HomeController@logout');

Route::get('main',function (){
    return view('welcome1');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/first','UsersController@index')->name('first');

/*PIQ Controller*/
Route::get('/piq','PiqController@index')->name('piq');

