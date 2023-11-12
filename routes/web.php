<?php

use App\Http\Controllers\DemoController;


Route::get('/', 'DemoController@index')->name('index');
Route::get('/add', 'DemoController@add')->name('add');
Route::post('/saveAdd', 'DemoController@saveAdd')->name('saveAdd');
Route::get('/edit/{id}', 'DemoController@edit')->name('edit');
Route::post('/update/{id}', 'DemoController@update')->name('update');
Route::get('/delete/{id}', 'DemoController@delete')->name('delete');

// Route::get('admin/loai/create', 'Backend\LoaiController@create')->name('admin.loai.create');
// Route::post('admin/loai/store', 'Backend\LoaiController@store')->name('admin.loai.store');
// Route::get('/admin/loai/edit/{id}', 'Backend\LoaiController@edit')->name('admin.loai.edit');
// Route::put('/admin/loai/edit/{id}', 'Backend\LoaiController@update')->name('admin.loai.update');
// Route::delete('/admin/loai/delete/{id}', 'Backend\LoaiController@destroy')->name('admin.loai.destroy');