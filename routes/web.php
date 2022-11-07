<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserReportController;
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

Route::prefix('users')->group(function() {
    Route::get('/', [UserController::class, 'usersView']);
    Route::post('/add', [UserController::class, 'addUsers']);
    Route::get('/reset', [UserController::class, 'resetusers']);

    Route::get('/report', [UserReportController::class, 'reportView']);
    Route::get('/report/continentData', [UserReportController::class, 'getContinentData']);
    Route::get('/report/ageData', [UserReportController::class, 'getAgeData']);
    Route::get('/report/sexData', [UserReportController::class, 'getSexData']);
});
