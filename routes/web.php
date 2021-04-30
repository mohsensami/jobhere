<?php

use App\Http\Controllers\Panel\AdController;
use App\Http\Controllers\Panel\CvController;
use App\Http\Controllers\Panel\EmployerController;
use App\Http\Controllers\Panel\UserController;
use Illuminate\Support\Facades\Auth;
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
// Auth::routes();
Auth::routes();
Route::get('/' , function () {
   return view('master');
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function() {
        return view('panel.index');
    })->name('panel.dashboard');
});



Route::get('/profile', [UserController::class, 'edit'])->name('panel.profile');
Route::put('/profile', [UserController::class, 'update'])->name('profile.update');

Route::middleware(['admin','auth'])->get('/employers', [EmployerController::class, 'index'])->name('panel.employers');


Route::middleware('auth')->resource('/panel/ads', AdController::class);

Route::resource('/panel/cvs', CvController::class);