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

Route::get('/Welcome',function (){
    return 'Welcome To First Page';
});



// Route::get('/Lading',function (){
//     return view(view:'landing');
// });

Route::view('/landing', 'landing');
Route::view('/about', 'about');
Route::view('/AA', 'AA');
Route::view('/ss', 'ss');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function(){

                return 'Home';
});

Route :: get('fillable','CrudController@getoffer');

Route ::group(['prefix'=>'offers'],function(){
    //Route :: get('store','CrudController@store');
    Route :: get('create','CrudController@create');
    Route :: post('store','CrudController@store') -> name('offers.store');

});