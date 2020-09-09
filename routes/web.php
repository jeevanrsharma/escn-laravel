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

Route::get('/', function () {
    // return view('layout.login-signin.header');
    return view('login-signin.sign-up');

    // return view('layout.login-signin.welcome');

});

Route::get('sign-in', 'UserAccess@signIn');
Route::get('list', 'UserAccess@list');

Route::post('registerUser', 'UserAccess@register');

Route::get('list-users', 'UserAccess@list');
