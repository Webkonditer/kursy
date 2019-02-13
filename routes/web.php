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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middlevare'=>'web'], function () {
    //Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
        //Route::post('/form_check', 'IndexController@form_check')->name('form_check');
    //Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    //Route::get('/success_url', 'ResultController@success')->name('result');
    //Route::post('/result_url', 'ResultController@result')->name('result');
    //Route::get('/fail_url', function () {return view('site.fail');});
    //Route::get('/unsubscribe', function () {return view('site.unsubscribe');});
    Route::get('/teachers/register', 'IndexController@forms')->name('form');
});
