<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CertificateController;
use App\Http\Controllers\admin\FactoryController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\OilController;
use App\Http\Controllers\admin\PetrolController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\SaleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', [IndexController::class, 'index'])->name('home.index');
    Route::resource('/factory', FactoryController::class);
    Route::resource('/petrol', PetrolController::class);
    Route::resource('/oil', OilController::class);
    Route::resource('/sale', SaleController::class);
    Route::resource('/review', ReviewController::class);
    Route::resource('/certificate', CertificateController::class);
});

Route::get('/admin/auth', [AuthController::class, 'index'])->name('login');
Route::post('/admin/auth', [AuthController::class, 'auth'])->name('login.post');
