<?php

use App\Http\Controllers\NousController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('contact-nous', function () {
    return view('pages.contact-nous');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/a-propos', [NousController::class, 'indexWebsite'])->name('website.nous');
    Route::get('/admin/a-propos', [NousController::class, 'index'])->name('admin.nous');
    Route::post('/admin/a-propos/store', [NousController::class, 'store'])->name('admin.nous.store');
});
