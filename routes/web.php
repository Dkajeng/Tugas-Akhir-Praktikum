<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\RemainderController;
use Illuminate\Support\Facades\Redirect;
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




Route::get('/',[RemainderController::class, 'index']);
Route::post('/remainder',[RemainderController::class, 'store_remainder'])->name('store_remainder');
Route::post('/note', [NoteController::class, 'add_note'])->name('add_note');
