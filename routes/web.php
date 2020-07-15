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
    return view('welcome');
});
Route::get('/insertitem', function () { return view('insertitem'); });  

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('insert','insertcontroller@insertform');
Route::post('create','insertcontroller@insert'); 
Route::get('viewitem','viewcontroller@index'); 
Route::get('edit-records','updatecontroller@index');
Route::get('edit/{id}','updatecontroller@show');
Route::post('edit/{id}','updatecontroller@edit');
Route::get('delete-records','deletecontroller@index');
Route::get('delete/{id}','deletecontroller@destroy'); 