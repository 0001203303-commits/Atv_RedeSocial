<?php

use Illuminate\Support\Facades\Route;



Route::get('/', "App\Http\Controllers\WebsiteController@home");
Route::get('/home', "App\Http\Controllers\WebsiteController@home");
Route::get('/explore', "App\Http\Controllers\WebsiteController@explore");
Route::get('/reels', "App\Http\Controllers\WebsiteController@reels");
Route::get('/messages', "App\Http\Controllers\WebsiteController@messages");
Route::get('/notification', "App\Http\Controllers\WebsiteController@notification");
Route::get('/profile', "App\Http\Controllers\WebsiteController@profile");
//login e register
Route::get('/login', "App\Http\Controllers\UserController@login"); 
