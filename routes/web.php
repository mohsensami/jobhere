<?php

use App\Http\Controllers\Panel\EmployerController;
use App\Http\Controllers\Panel\UserController;
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

Route::get('/' , function () {
   return 'Home';
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function() {
        return view('panel.index');
    })->name('panel.dashboard');
});



Route::get('/profile', [UserController::class, 'index'])->name('panel.profile');
Route::put('/profile', [UserController::class, 'update'])->name('profile.update');

Route::get('/employers', [EmployerController::class, 'index'])->name('panel.employers');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
