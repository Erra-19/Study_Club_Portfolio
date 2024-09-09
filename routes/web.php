<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/EasySend', function () {
    return view('EasySend');
});