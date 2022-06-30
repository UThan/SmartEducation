<?php

use App\Http\Livewire\Student\All as AllStudent;
use App\Http\Livewire\Student\Create as CreateStudent;
use App\Http\Livewire\Student\Edit as EditStudent;
use App\Http\Livewire\Student\View as ViewStudent;
use App\Http\Livewire\Partner\All as AllPartner;
use App\Http\Livewire\Partner\Create as CreatePartner;
use App\Http\Livewire\Partner\Edit as EditPartner;
use App\Http\Livewire\member\All as AllMember;
use App\Http\Livewire\member\Create as CreateMember;
use App\Http\Livewire\member\Edit as EditMember;
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

Route::prefix('partner')->name('partner.')->group(function(){
    Route::get('/', AllPartner::class)->name('all');    
    Route::get('/create', CreatePartner::class)->name('create');
    Route::get('/edit/{id}', EditPartner::class)->name('edit');
});

Route::prefix('member')->name('member.')->group(function(){
    Route::get('/', AllMember::class)->name('all');    
    Route::get('/create', CreateMember::class)->name('create');
    Route::get('/edit/{id}', EditMember::class)->name('edit');
});

