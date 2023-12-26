<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\signinController;
use App\Http\Controllers\LabourController;
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
Route::get('/customer/{id}',[DemoController::class,('customer')]);
//Route::get('/addproduct',[])
Route::get('/addlabour',[LabourController::class,('labour')]);
Route::POST('/addlabour',[LabourController::class,('addlabour')]);
Route::get('/viewlabour',[LabourController::class,('labourview')]);
Route::get('/del/{id}',[LabourController::class,('destroy')]);
Route::get('/edit1/{id}',[LabourController::class,('edit1')]);
Route::POST('/update1/{id}',[LabourController::class,('update1')]);



