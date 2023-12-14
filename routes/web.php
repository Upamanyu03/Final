<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\signinController;
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

Route::get('/form',[DemoController::class,('form')]);
Route::post('/regi',[DemoController::class,('regi')])->name('registration');
Route::get('/view',[DemoController::class,('view')]);
Route::get('/del/{id}',[DemoController::class,('destroy')]);
Route::get('/edit/{id}',[DemoController::class,('edit')]);
Route::post('/update/{id}',[DemoController::class,('update')])->name('vehicle.update');
Route::get('/',[DemoController::class,('first')]);
Route::get('/sign',[signinController::class,('sign')]);
Route::get('/signUp',[signinController::class,('signUp')]);
Route::POST('/signUp',[signinController::class,('register')]);
Route::get('/get-token',[DemoController::class,('getToken')]);
Route::POST('/signIn',[signinController::class,('signIn')]);
Route::get('/invoice',[DemoController::class,('invoice')]);
