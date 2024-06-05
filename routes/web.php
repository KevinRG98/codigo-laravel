<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TalleresController;


Route::view('/', 'home')->name('inicio');
Route::view('programas', 'programas')->name('programas');
Route::get('talleres', 'App\Http\Controllers\TalleresController@index')->name('talleres');
Route::view('asesoramiento', 'asesoramiento')->name('asesoramiento');
Route::view('contacto', 'contacto')->name('contacto');



