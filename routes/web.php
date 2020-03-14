<?php

use Illuminate\Support\Facades\Route;
use Laravel\Ui\AuthRouteMethods;

Route::mixin(new \Laravel\Ui\AuthRouteMethods());
Route::auth(['verify' => true]);


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::livewire('/new-post', 'new-post');
// Route::livewire('/edit-post', 'edit-post');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
