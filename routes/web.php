<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\Module1Controller;
use App\Http\Controllers\Module2Controller;
use App\Http\Controllers\Module3Controller;
use App\Http\Controllers\Module4Controller;
use App\Http\Controllers\Module5Controller;
use App\Http\Controllers\UserController;

Route::get('/', HomeController::class)->name('home');

Route::get('/login', [LoginController::class, 'create'])->name('login');
// Route::post('/login', [LoginController::class, 'login'])->name('init');

Route::get('/sign-up', [SignUpController::class, 'create'])->name('sign-up');

Route::post('/modules', [ModuleController::class, 'index'])->name('init');
Route::get('/modules', [ModuleController::class, 'index'])->name('get-init');

Route::get('/module1-page{page}', [Module1Controller::class, 'goTo'])->name('module-1');
Route::get('/module2-page{page}', [Module2Controller::class, 'goTo'])->name('module-2');
Route::get('/module3-page1', [Module3Controller::class, 'goTo'])->name('module-3');
Route::get('/module4-page1', [Module4Controller::class, 'goTo'])->name('module-4');
Route::get('/module5-page1', [Module5Controller::class, 'goTo'])->name('module-5');

Route::get('/info-users', [UserController::class, 'index'])->name('user.index');
Route::get('/add-admin', [UserController::class, 'invite'])->name('user.invite');




