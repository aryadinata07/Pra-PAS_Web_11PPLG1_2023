<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hewanController;
use App\Http\Controllers\seranggaController;
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
    return view('welcome');
});



Route::get('/home', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/hewan/all', [hewanController::class, 'index']);
Route::get('/hewan/detail/{hewan}', [hewanController::class, 'show']);
Route::get('/serangga/all', [seranggaController::class, 'index']);
Route::get('/serangga/detail/{serangga}', [seranggaController::class, 'show']);