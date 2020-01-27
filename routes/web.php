<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('vista', function() {
    return view('vista');
});

//Route::get('controlador', 'ControladorController@index');


Route::get('redireccionar', function() {
    return Redirect::to('/');
});

Route::resource('controlador', 'ControladorController');
