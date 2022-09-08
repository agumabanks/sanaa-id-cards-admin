<?php

use App\Http\Controllers\IdCards;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostPController;

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

Route::get('/faq', function () {
    return view('website.faq');
});


// landing page

Route::get('/44', function () {
    return view('website.home');
});



// services

Route::get('/services', function () {
    return view('website.services');
});
// work

Route::get('/work', function () {
    return view('website.work');
});

// upload image
// id cards
Route::get('/', [PostPController::class, 'index'])->middleware(['auth'])->name('bunnerstore');
Route::post('/list', [PostPController::class, 'upload'])->middleware(['auth'])->name('list');

// view profile
Route::get('view/{id}', [PostPController::class, 'viewProfile'])->name('view');
// 
// contacts
Route::get('/contacts', function () {
    return view('website.contacts');
});

// about

Route::get('/about', function () {
    return view('website.about');
});

// Route::get('/', function () {
//     return view('landing');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
