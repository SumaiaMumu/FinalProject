<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BikeController;
use App\Http\Controllers\Backend\CustomerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//Admin Routes
Route::get('/',[AdminController::class,'dashboard'])->name('admin.dashboard');

//customer routes
Route::get('/admin/customer/list',[CustomerController::class,'index'])->name('admin.customer.list');
Route::get('/admin/customer/create',[CustomerController::class,'create'])->name('admin.customer.create');
Route::post('/admin/customer/store',[CustomerController::class,'store'])->name('admin.customer.store');
Route::get('/admin/customer/show/{id}',[CustomerController::class,'show'])->name('admin.customer.show');//customer view route
Route::delete('/admin/customer/delete/{id}',[CustomerController::class,'delete'])->name('admin.customer.delete');//customer delete route

//Bike routes
Route::get('/admin/bike/list',[BikeController::class,'index'])->name('admin.bike.list');
Route::get('/admin/bike/create',[BikeController::class,'create'])->name('admin.bike.create');
Route::post('/admin/bike/store',[BikeController::class,'store'])->name('admin.bike.store');
Route::get('/admin/bike/show/{id}',[BikeController::class,'show'])->name('admin.bike.show');//bike view route
Route::delete('/admin/bike/delete/{id}',[BikeController::class,'delete'])->name('admin.bike.delete');//bike delete route