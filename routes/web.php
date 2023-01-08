<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', [EventController::class, 'index']);
Route::get('/event/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/event/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/contact/{id?}', function ($id = null) {
    return view('contact', ['id' => $id]);
});

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');
