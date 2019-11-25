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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'web'], function () {
    //Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
        //Route::post('/form_check', 'IndexController@form_check')->name('form_check');
    //Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    //Route::get('/success_url', 'ResultController@success')->name('result');
    //Route::post('/result_url', 'ResultController@result')->name('result');
    //Route::get('/fail_url', function () {return view('site.fail');});
    //Route::get('/unsubscribe', function () {return view('site.unsubscribe');});
    Route::get('/', 'IndexController@index')->name('main');
    Route::get('/news', 'IndexController@news')->name('news');
    Route::get('/news/{news}', 'IndexController@news_x')->name('news_x');
    Route::get('/main', 'IndexController@main')->name('main');
    Route::get('/pages/{page}', 'IndexController@pages')->name('pages');
});
//Админка
Route::group(['prefix'=>'admin','middleware'=>'auth'], function () {
  //Слайдер
    Route::resource('slider', 'SliderController', ['as'=>'admin']);
		Route::get('/slider/{slider}/delete', 'SliderController@destroy')->name('admin.slider.delete');
  //Новости
    Route::resource('news', 'NewsController', ['as'=>'admin']);
    Route::get('/news/{news}/delete', 'NewsController@destroy')->name('admin.news.delete');
  //Страницы
    Route::resource('pages', 'PagesController', ['as'=>'admin']);
    Route::get('/pages/{page}/delete', 'PagesController@destroy')->name('admin.page.delete');
  //Изображения
    Route::get('/images/', 'ImagesController@index')->name('admin.images.index');
    Route::post('/images/', 'ImagesController@store')->name('admin.images.store');
    Route::get('/images/{image}/delete', 'ImagesController@destroy')->name('admin.images.delete');
});
