<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',   [
    "uses"=>"App\Http\Controllers\PagesController@welcome",
    "as"=>"welcome",
    'middleware'=> 'auth'
]);

Route::get('/login', [
    "uses"=>"App\Http\Controllers\PagesController@login",
    "as"=>"login"
]);

Route::post('/login', [
    "uses"=>"App\Http\Controllers\UserController@login",
    "as"=>"post.login"
]);

Route::get('/logout', [
    "uses"=>"App\Http\Controllers\UserController@logout",
    "as"=>" logout"
]);

Route::post('/upload', [
    "uses"=>"App\Http\Controllers\UserController@upload",
    "as"=>"upload",
    'middleware'=> 'auth'
]);

Route::get('/video/{video_name}',[
    'uses'=> 'App\Http\Controllers\UserController@Getfile',
    'as'=> 'video',
    'middleware'=> 'auth'
]);

Route::get('/register', [
    "uses"=>"App\Http\Controllers\PagesController@register",
    "as"=>"register"
]);

Route::post('/register', [
    "uses"=>"App\Http\Controllers\UserController@register",
    "as"=>"post.register"
]);

Route::get('/profile', [
    "uses"=>"App\Http\Controllers\PagesController@profile",
    "as"=>"profile",
    'middleware'=> 'auth'
]);