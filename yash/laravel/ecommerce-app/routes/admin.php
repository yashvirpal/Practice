<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

   
});

Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
     Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');

// Route::view('/admin', 'admin.dashboard.index');
// Route::group(['prefix'  =>  'admin'], function () {
//     Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
//     Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
//     Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');
//     Route::group(['middleware' => ['auth:admin']], function () {
//         Route::get('/', function () {
//             return view('admin.dashboard.index');
//         })->name('admin.dashboard');
//     });

//     //Setting
//     Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
//     Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');
    
// });

Route::view('/admin', 'admin.dashboard.index')->name('admin.dashboard');

Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');
