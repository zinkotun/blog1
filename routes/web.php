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
Route::get ('/test',function(){
    return view ('test');
});
Route::get('/home',function(){
    return view('home');
});
Auth::routes();
Route::get('/useradd','UserController@useradd');
Route::get('/userdelete','UserController@userdelete');
Route::post('/useradd','UserController@userinsert');
Route::get('/customeradd','CustomerController@add');
Route::post('/customeradd','CustomerController@create');
Route::get ('/customerlist','CustomerController@index');
Route::get('/customerdetail/{id}','CustomerController@detail');
Route::get('/customerupdate/{id}','CustomerController@edit');
Route::post('/customerupdate','CustomerController@update');
Route::get('/customerdelete/{id}','CustomerController@delete');

//Route::get('/posts','PostController@index');
//Route::get('/posts/create','PostController@create');
//Route::post('/posts','PostController@store');
//Route::get('/posts/{id}','PostController@show');
//Route::get('/posts/{id}/edit','PostController@edit');
//Route::patch('/posts/{post}','PostController@update');
//Route::delete('/posts/{post}','PostController@destroy');

Route::resource('/posts','PostController');



Route::get('/home', 'HomeController@index')->name('home');
