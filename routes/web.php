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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); 

Route::namespace("App\\Http\\Controllers")->group(function () {
    Route::get("/users", "UserController@index")->name('user.index');
    Route::post("/users/store", "UserController@store")->name('user.store');

    Route::get('downloadExcelUsers', 'ExcelController@downloadExcelUsers')->name("downloadExcelUsers");

});

