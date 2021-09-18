<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SettingController;

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


Route::middleware(['auth'])->group(function () {

    Route::redirect('/dashboard', '/student')->name('dashboard');
    Route::get('/setting', SettingController::class)->name('setting');

    Route::resource('student', StudentController::class);

    Route::apiResources([
        'city' => CityController::class,
        'institute' => InstituteController::class,
        'course' => CourseController::class,
        'payment' => PaymentController::class,
    ]);
});



require __DIR__ . '/auth.php';
