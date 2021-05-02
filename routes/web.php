<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NoteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/sample/view', [PagesController::class, 'view']);
Route::get('/sample/add', [PagesController::class, 'add']);
Route::get('/sample/edit', [PagesController::class, 'edit']);
Route::resource('notes', NoteController::class);