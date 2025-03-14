<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

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

Route::post('/sendMail', [websiteController::class, 'sendMail'])->name('sendMail');
Route::get('/{slug}', [websiteController::class, 'articleDetails'])->name('articleDetails');

Route::get('/', [websiteController::class, 'home'])->name('home')->withoutMiddleware(['auth']);
