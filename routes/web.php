<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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


Auth::routes();

Route::get('/', [PageController::class, 'home'])->name('inedx');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/service-details', [PageController::class, 'service_details'])->name('service.details');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog-details', [PageController::class, 'blog_details'])->name('blog.details');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
// Route::get('/', [PageController::class, 'home'])->name('inedx');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index')->middleware('auth');

Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update')->middleware('auth');


Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
