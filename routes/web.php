<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//การสร้าง Route
Route::get('/about', function () {
    return view('about');
});

Route::get('/member', function () {
    return view('member.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});