<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/notFound', [HomeController::class,'notFound'])->name('not.found');

Route::post('/search',[HomeController::class,'search'])->name('search');

Route::get('/create/master',[HomeController::class,'create'])->name('master.create');
Route::post('/store/master',[HomeController::class,'store'])->name('master.store');

Route::get('/single', [HomeController::class,'single'])->name('single');
Route::get('/biography', [HomeController::class,'biography'])->name('biography');

Route::get('/weeklySchedule', [HomeController::class,'weeklySchedule'])->name('weekly.schedule');

Route::get('/download', [HomeController::class,'download'])->name('download');

Route::get('/contact', [HomeController::class,'contact'])->name('contact');

Route::get('/elanat', [HomeController::class,'elanat'])->name('elanat');

Route::get('/books', [HomeController::class,'books'])->name('books');

Route::get('/lectures', [HomeController::class,'lectures'])->name('lectures');

Route::get('/tahgdirnameha', [HomeController::class,'tahgdirnameha'])->name('tahgdirnameha');

Route::get('/payannameh', [HomeController::class,'payannameh'])->name('payannameh');
