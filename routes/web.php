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
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index']);

    Route::get('option/{option_id}', [App\Http\Controllers\OptionController::class, 'getLevels']);

    Route::get('settings/{option_id}', [App\Http\Controllers\SettingsController::class, 'index']);
    Route::put('settings/default', [App\Http\Controllers\SettingsController::class, 'setPercentageToDefault']);
    Route::put('settings/save', [App\Http\Controllers\SettingsController::class, 'savePercentages']);

    Route::get('about/{option_id}', [App\Http\Controllers\AboutController::class, 'index']);
});
