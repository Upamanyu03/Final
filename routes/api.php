<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\apicontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/view",[apicontroller::class,('search')]);
Route::POST('/insertdata',[apicontroller::class,('insertdata')]);
Route::PUT('/update/{id}',[apicontroller::class,('update')]);
Route::delete('/delete/{id}',[apicontroller::class,('destroy')]);
Route::POST('/signUp',[apicontroller::class,('register')]);
Route::POST('/signIn',[apicontroller::class,('signIn')]);
