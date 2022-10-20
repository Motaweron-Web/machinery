<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(), 'namespace' => 'Web',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
        ### HOME ###
        Route::get('/', 'HomeController@index')->name('home');

        #### About ###
        Route::get('/about-us','AboutController@index')->name('about-us');

        ### Projects ###
        Route::get('/projects','ProjectController@index')->name('project-index');
        Route::get('/projects/details/{id}','ProjectController@details')->name('project-details');

        ### Projects ###
        Route::get('/products','ProductController@index')->name('product-index');
        Route::get('/products/details/{id}','ProductController@details')->name('product-details');

        ### Order ###
        Route::post('/orders_store','ProductController@storeOrder')->name('orders_store');

        #### Contact ###
        Route::get('/contact-us','ContactController@index')->name('contact-us');
        Route::post('/contact-us','ContactController@store')->name('contact-us-store');

});
























Route::group(['prefix'=>'user','namespace' => 'Web'],function () {

    Route::get('/do-login', 'UserController@index')->name('user.dologin');
    Route::get('/login', 'UserController@dologin')->name('user.do-login');
    Route::POST('/login', 'UserController@login')->name('user.login');
    Route::POST('/register', 'UserController@store')->name('user.register');
    Route::get('logout', 'UserController@logout')->name('user.logout');


});
