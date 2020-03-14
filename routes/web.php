<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::livewire('/new-post', 'new-post');
// Route::livewire('/edit-post', 'edit-post');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
