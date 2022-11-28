<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\AdminController;

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

//admin


// Route::get('/admin',[CheckController::class, 'admin']);
Route::get('/admin',[AdminController::class, 'admin']);

//Doctor
Route::get('/doctor_list',[DoctorController::class, 'doctor_list']);
Route::get('/add_doctor',[DoctorController::class, 'add_doctor']);


Route::get('/home',[HomeController::class, 'redirect']);

Route::get('/',[HomeController::class, 'index']);




Route::get('/about',[HomeController::class, 'about']);
Route::get('/contact',[HomeController::class, 'contact']);
Route::get('/doctor',[DoctorController::class, 'doctor']);
Route::get('/doctor-detail',[DoctorController::class, 'doctor_detail']);
Route::get('/service',[ServiceController::class, 'service']);
Route::get('/service-detail',[ServiceController::class, 'service_detail']);
Route::get('/product',[ProductController::class, 'product']);
Route::get('/product-detail',[ProductController::class, 'product_detail']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
