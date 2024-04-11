<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members', [App\Http\Controllers\MemberController::class, 'index'])->name('members');
Route::get('/top', [App\Http\Controllers\MemberController::class, 'top'])->name('top');
Route::get('/touroku', [App\Http\Controllers\MemberController::class, 'touroku'])->name('touroku');
Route::post('/member', [App\Http\Controllers\MemberController::class, 'store'])->name('member');
Route::delete('/member/{member}', [App\Http\Controllers\MemberController::class, 'destroy'])->name('/member/{member}');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
