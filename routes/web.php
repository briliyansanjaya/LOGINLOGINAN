<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [AgentController::class, 'index']);

Route::fallback(function () {
    return view('404', [
        'title' => '404'
    ]);
});

Route::get('/login', [LoginController::class, 'login'],)->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'register'],)->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/add', [AgentController::class, 'add'],)->name('add')->middleware('auth');
Route::post('/input', [AgentController::class, 'input'])->name('input');
Route::get('/delete/{id}', [AgentController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/edit/{id}', [AgentController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('/update/{agents:agent_id}', [AgentController::class, 'update'])->name('update');

