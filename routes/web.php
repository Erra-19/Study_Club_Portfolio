<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});



Route::middleware(['guest'])->group(function (){
    Route::get('/login', function () {return view('login');});
    Route::post('/loginadmin', [LoginController::class, 'login'])->name('login');
    Route::get('/register', function () {
    return view('register');
    });
    Route::post('/register', [RegisterController::class, 'register']);

});
Route::get('/', function (){
    return redirect('/admin');
});
Route::middleware(['auth'])->group(function (){
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/admin/kurir', [AdminController::class, 'kurir'])->name('kurir');
    Route::get('/admin/staff', [AdminController::class, 'staff'])->name('staff');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});


