<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MessagesController;

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


// Route::view('/', 'home')->name('home');
// Route::view('/about', 'about')->name('about');
// Route::view('/contact', 'contact')->name('contact');
// Route::post('/contact', [MessagesController::class, 'store']);

// Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

// // Auth::register('');


Route::get('/', function () {
    // dd('aqui');
    return Inertia::render('home');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
