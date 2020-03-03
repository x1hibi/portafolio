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

//TODO we need to: asign all the route corretly in route,method and controller na dorder by logic of the page and comment every route

//LINK this route is a route test and return a funtion inside the controller testController
Route::get('/test', 'testController@testString');

Route::view('/login', 'login');

Route::view('/course', 'course');

//LINK this is a test to send a query variabe into a view with 

Route::post('/Query','TestController@newTest');

Route::view('/testQuery','testQuery');





//SECTION these are all the view of the web aplication 
Route::view('/', 'home');
Route::view('/register', 'register');
Route::view('/login', 'login');
Route::view('/add', 'add');
Route::view('/course', 'course');

//SECTION these are to make queries
Route::get('/query2','TestController@query');
Route::get('/query','CourseController@query');


//SECTION these are to send data into tables
Route::post('register','UserController@insert');
Route::post('addTopic','CourseController@insert');
Route::post('login','LoginController@validation');

