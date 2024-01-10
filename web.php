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

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', UserController::class);
    Route::resource('bu', BUController::class);
    Route::resource('manager', ManagerController::class);
    Route::resource('developer', DeveloperController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('report', ReportController::class);
    Route::resource('project_developer', ProjectDeveloperController::class);
});
