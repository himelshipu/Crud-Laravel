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


Route::get('/test', function () {
    return view('test');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/students', 'StudentController@index')->name('student.aa');
Route::get('/student/create', 'StudentController@create')->name('student.create');
Route::post('/student/store', 'StudentController@store')->name('student.store');



Route::get('/home/{name}/{age}', 'HomeController@index');
