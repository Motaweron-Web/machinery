<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix'=>'admin'],function (){
    Route::get('login', 'AuthController@index')->name('admin.login');
    Route::POST('login', 'AuthController@login')->name('admin.login');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    Route::get('/','HomeController@index')->name('adminHome');

    #### Admins ####
    Route::resource('admins','AdminController');
    Route::POST('delete_admin','AdminController@delete')->name('delete_admin');
    Route::get('my_profile','AdminController@myProfile')->name('myProfile');


//    #### Services ####
//    Route::resource('services','ServiceController');
//    Route::post('services.delete','ServiceController@delete')->name('services.delete');


    ####  AboutUs  ####
    Route::get('aboutus','AboutUsController@index')->name('aboutUs.index');
    Route::get('aboutus/create','AboutUsController@create')->name('aboutUs.create');
    Route::post('aboutus/store','AboutUsController@store')->name('aboutUs.store');
    Route::get('aboutus/edit/{id}','AboutUsController@edit')->name('aboutUs.edit');
    Route::post('aboutus/update/{id}','AboutUsController@update')->name('aboutUs.update');
    Route::post('aboutus.delete','AboutUsController@delete')->name('aboutus.delete');

    ####  Team  ####
    Route::get('team','TeamController@index')->name('team.index');
    Route::get('team/create','TeamController@create')->name('team.create');
    Route::post('team/store','TeamController@store')->name('team.store');
    Route::get('team/edit/{id}','TeamController@edit')->name('team.edit');
    Route::post('team/update/{id}','TeamController@update')->name('team.update');
    Route::post('team.delete','TeamController@delete')->name('team.delete');

    #### contactUs ####
    Route::get('contactUs','ContactController@index')->name('contact.index');
    Route::post('contactUs.delete','ContactController@delete')->name('contact.delete');

    ####  Project  ####
    Route::get('project','ProjectController@index')->name('project.index');
    Route::get('project/create','ProjectController@create')->name('project.create');
    Route::post('project/store','ProjectController@store')->name('project.store');
    Route::get('project/edit/{id}','ProjectController@edit')->name('project.edit');
    Route::post('project/update/{id}','ProjectController@update')->name('project.update');
    Route::post('project.delete','ProjectController@delete')->name('project.delete');

    ####  Product  ####
    Route::get('product','ProductController@index')->name('product.index');
    Route::get('product/create','ProductController@create')->name('product.create');
    Route::post('product/store','ProductController@store')->name('product.store');
    Route::get('product/edit/{id}','ProductController@edit')->name('product.edit');
    Route::post('product/update/{id}','ProductController@update')->name('product.update');
    Route::post('product.delete','ProductController@delete')->name('product.delete');

    ####  Users  ####
    Route::get('user','UserController@index')->name('user.index');
    Route::get('user/create','UserController@create')->name('user.create');
    Route::post('user/store','UserController@store')->name('user.store');
    Route::get('user/edit/{id}','UserController@edit')->name('user.edit');
    Route::post('user/update/{id}','UserController@update')->name('user.update');
    Route::post('user.delete','UserController@delete')->name('user.delete');

    #### Order ####
    Route::get('order','OrderController@index')->name('order.index');
    Route::post('order.delete','OrderController@delete')->name('order.delete');
    Route::get('details_product/{id}','OrderController@details_product')->name('details_product');


    ####  Setting  #####
    Route::get('setting','SettingController@index')->name('setting.index');
    Route::post('setting/update/{id}','SettingController@update')->name('setting.update');










    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');



   ### Points #######


   Route::resource('points','PointController');
    Route::POST('delete_point','PointController@delete')->name('delete_point');






});










