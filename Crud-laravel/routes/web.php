<?php


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/modelos' , 'ModeloController' , ['except' => ['destroy']]);
Route::get('/modelos/{modelo}/delete', 'ModeloController@destroy')->name('modelos.destroy');

