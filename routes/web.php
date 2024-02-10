<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mysql1Controller;
use App\Http\Controllers\Mysql2Controller;
use App\Http\Controllers\RedisController;
use App\Http\Controllers\MeilisearchController;
use App\Http\Controllers\MailpitController;

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


Route::get('/mysql1', [Mysql1Controller::class, 'index']);
Route::get('/mysql2', [Mysql2Controller::class, 'index']);
Route::get('/redis', [RedisController::class, 'index']);