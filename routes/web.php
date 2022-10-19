<?php

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
    return view('index');
});
Route::get('about.html', function () {
    return view('about');
});
Route::get('contact.html', function () {
    return view('contact');
});
Route::get('index.html', function () {
    return view('index');
});
Route::get('fruit.html', function () {
    return view('fruit');
});
Route::get('testimonial.html', function () {
    return view('testimonial');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () { 
   
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);
});