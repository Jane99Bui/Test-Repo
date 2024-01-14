<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TaikhoanController;
use App\Http\Controllers\PrductController;
use App\Http\Controllers\IndexStudentcontroller;
use App\Http\Controllers\SpController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AccountController;



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
    return view('Sp');
});

Route::get('add-student', [StudentController::class, 'create']);
Route::post('add-student', [StudentController::class, 'store']);
Route::get('edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);
Route::delete('delete/{id}', [StudentController::class, 'destroy']);
Route::get('delete-student/{id}', [StudentController::class, 'delete']);


Route::get('add-taikhoan', [TaikhoanController::class, 'create']);
Route::post('add-taikhoan', [TaikhoanController::class, 'store']);
Route::get('student', [IndexStudentcontroller::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('save-products', [SpController::class, 'store']);
Route::post('save-sp', [SpController::class, 'store']);

Route::post('save-product', [PrductController::class, 'store']);
Route::get('product', [PrductController::class, 'index']);


Route::get('image', [ImageController::class, 'image']);
Route::post('save-image', [ImageController::class, 'store']);
Route::get('view-image', [ImageController::class, 'index']);
Route::get('view-imageid/{id}', [ImageController::class, 'viewid']);




Route::get('add-account', [AccountController::class, 'index']);
Route::post('save-account', [AccountController::class, 'store']);