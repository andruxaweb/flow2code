<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;


Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/moviesList', function () {
    return view('moviesList');
})->name('moviesList');
Route::get('/searchingMovie', function () {
    return view('searchingMovie');
})->name('searchingMovie');

Route::get('/moviesList/all/{id}',
 'MoviesController@movieDesc'
 )->name('moovies-Desc');

Route::get('/moviesList/all/{id}/edit',
  'MoviesController@movieEdit'
  )->name('moovies-edit');

Route::post('/moviesList/all/{id}/edit',
   'MoviesController@movieEditSave'
   )->name('moovies-edit-save');

Route::get('/moviesList/search/all',
    'MoviesController@search'
    )->name('moovies-search');

Route::get('/moviesList/all/{id}/delete',
    'MoviesController@movieDelete'
    )->name('moovies-delete');


Route::get('/moviesList/all', 'MoviesController@allDate')->name('moovies-date');
Route::post('/moviesList/submit', 'MoviesController@submit')->name('moovies-form');
