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

// 課題4(php-09)
// 【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。
// web.phpを編集して、admin/profile/create にアクセスしたら ProfileController の add Action に、
// admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください。

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    // Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');※php/laravel12までは各々にmiddleware('auth')を設定していた。
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create'); # 追記
    Route::get('news','Admin\NewsController@index');
    Route::get('new/edit','Admin\NewsController@edit');
    Route::post('news/edit','Admin\NewsController@update');
    Route::get('news/delete','Admin\NewsController@delete');
// 下記2段は課題4(php-09)の回答
// 課題2、3(php-12)…下記2段に「->middleware('auth')」を追記
    // Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');※課題2(php-12)で作成した為、敢えて保存しておく。
    // Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');※課題3(php-12)で作成した為、敢えて保存しておく。
    Route::get('profile/create', 'Admin\ProfileController@add');
    // 課題3(php-13) 
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::get('profile','Admin\ProfileController@index');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    // 課題6(php-13)
    Route::post('profile/edit', 'Admin\ProfileController@update');
    Route::get('profile/delete','Admin\ProfileController@delete');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
