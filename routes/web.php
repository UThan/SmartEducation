<?php

use App\Http\Livewire\Student\All as AllStudent;
use App\Http\Livewire\Student\Create as CreateStudent;;
use App\Http\Livewire\Student\Edit as EditStudent;
use App\Http\Livewire\Student\View as ViewStudent;
use Illuminate\Routing\RouteGroup;
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


Route::prefix('student')->name('student.')->group(function(){
    Route::get('/', AllStudent::class)->name('all');
    Route::get('/create', CreateStudent::class)->name('create');
    Route::get('/view/{id}', ViewStudent::class)->name('view');
    Route::get('/edit/{id}', EditStudent::class)->name('edit');
});

