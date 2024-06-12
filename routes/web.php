<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('siteVitrine', function () {
    return view('demo.vitrine.index');
});
Route::get('backoffice', function () {
    return view('demo.backoffice.index');
});
Route::get('ecommerce', function () {
    return view('demo.ecommerce.index');
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('projects', ProjectController::class);
});