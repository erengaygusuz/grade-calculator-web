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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::middleware(['auth'])->group(function (){
    Route::get('main-page', [App\Http\Controllers\MainPageController::class, 'index']);
    Route::get('settings', [App\Http\Controllers\SettingsController::class, 'index']);
    Route::get('about', [App\Http\Controllers\AboutController::class, 'index']);
    Route::get('option', [App\Http\Controllers\OptionController::class, 'index']);
});
