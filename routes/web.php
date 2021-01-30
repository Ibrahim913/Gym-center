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
Route::resource('products','ProductController');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin','AdminController@index');





Route::get('home' , 'HomeController@homepage');

Route::get('about' , 'AboutController@aboutpage');

Route::get('services' , 'ServicesController@servicespage');

Route::get('trainers' , 'TrainersController@trainerspage');

Route::get('pricing' , 'PricingController@pricingpage');

Route::get('contact' , 'ContactController@contactpage');

Route::get('login' , 'LoginController@loginpage');
Route::get('register' , 'RegisterController@registerpage');


