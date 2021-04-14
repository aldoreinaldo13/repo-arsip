<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataarsipController;
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
    return view('home');
});

route::get('/arsip',[DataarsipController::class, 'index']);
route::get('/arsip/tambah', [DataarsipController::class, 'tambah']);
route::post('/arsip/proses',[DataarsipController::class, 'proses']);
route::get('/arsip/edit/{id}',[DataarsipController::class,'edit']);
route::post('/arsip/update', [DataarsipController::class,'update']);
route::get('/arsip/hapus/{id}',[DataarsipController::class, 'hapus']);
route::get('/arsip/cari',[DataarsipController::class, 'carii']);