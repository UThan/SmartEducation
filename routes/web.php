<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\CourseController;

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


Route::view('/', 'home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/service', 'pages.service')->name('service');
Route::view('/partner', 'pages.partner')->name('partner');
Route::view('/contact', 'pages.contact')->name('contact');

Route::get('/dashboard', function () {
    return redirect('/student')->with('success', 'Welcome back');
})->middleware(['auth'])->name('dashboard');





Route::middleware(['auth'])->group(function () {
    Route::resource('student', StudentController::class);

    Route::apiResources([
        'city' => CityController::class,
        'institute' => InstituteController::class,
        'course' => CourseController::class,
        'transaction' => TransactionController::class,
    ]);
});



require __DIR__ . '/auth.php';
