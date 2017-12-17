<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'teacher'], function () {
        Route::get('/', 'TeacherController@getList')->name('teacher.list');
        Route::get('/create', 'TeacherController@create')->name('teacher.create');
        Route::post('/create', 'TeacherController@store')->name('teacher.store');
        Route::get('/update/{id?}', 'TeacherController@edit')->name('teacher.edit');
        Route::post('/update/{id?}', 'TeacherController@update')->name('teacher.update');
        Route::get('/destroy/{id?}', 'TeacherController@destroy')->name('teacher.destroy');
    });
});