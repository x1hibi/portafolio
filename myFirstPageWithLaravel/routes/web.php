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

Route::get('/header',function (){
    return view('head');
});

Route::get('/navbar',function (){
    return view('navbar');
});

Route::get('/', function () {
    return view('introduction');
});


//We create a new route for the view of examples

Route::get('/blade',function (){
   return view('blade');
});

Route::get('/routes',function (){
    return view('routes');
});

Route::get('/example',function (){
    return view('example');
});

Route::get('/footer',function (){
    return view('footer');
});

Route::get('/vue',function (){
    return view('vue');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
