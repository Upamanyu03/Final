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
Route::get('/srecord/{id}',[apicontroller::class,('customer')]);
Route::POST('/addproduct',[apicontroller::class,('insert')]);
Route::get('/viewproduct',[apicontroller::class,('viewproduct')]);
Route::POST('/addlabour',[apicontroller::class,('addlabour')]);
Route::get('/viewlabour',[apicontroller::class,('labourview')]);
Route::delete('/productdelete/{id}',[apicontroller::class,('productdestroy')]);
Route::delete('/labourdel/{id}',[apicontroller::class,('labourdestroy')]);
Route::post('/productupdate/{id}',[apicontroller::class,('productupdate')]);
Route::post('/labourupdate/{id}',[apicontroller::class,('update1')]);