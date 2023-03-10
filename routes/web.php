<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\BaseController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CertificateController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\FactoryController;
use App\Http\Controllers\admin\FilterController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\PartnerController;
use App\Http\Controllers\admin\PetrolController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\SaleController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController as ControllersProductController;
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
    Route::resource('/sale', SaleController::class);
    Route::resource('/review', ReviewController::class);
    Route::resource('/certificate', CertificateController::class);
    Route::resource('/contact', ContactController::class);
    Route::resource('/partner', PartnerController::class);
    // Route::resource('/team', TeamController::class);
    Route::resource('/page', PageController::class);
    Route::resource('/setting', SettingController::class);
    Route::resource('/category', CategoryController::class);
    Route::get('/filter/{type}', [FilterController::class, 'index'])->name('filter.index');
    Route::get('/filter/create/{type}', [FilterController::class, 'create'])->name('filter.create');
    Route::get('/filter/{type}/edit/{id}', [FilterController::class, 'edit'])->name('filter.edit');
    Route::post('/filter/{type}', [FilterController::class, 'store'])->name('filter.store');
    Route::put('/filter/{type}/{id}', [FilterController::class, 'update'])->name('filter.update');
    Route::delete('/filter/delete/{type}/{id}', [FilterController::class, 'destroy'])->name('filter.destroy');
    Route::resource('/product', ProductController::class);
    Route::resource('/base', BaseController::class);
    Route::resource('/petrol', PetrolController::class);
});

Route::get('/admin/auth', [AuthController::class, 'index'])->name('login');
Route::post('/admin/auth', [AuthController::class, 'auth'])->name('login.post');



Route::group(['as' => 'front.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/{slug}', [HomeController::class, 'page'])->name('page');
    Route::get('/oil/{slug}', [CatalogController::class, 'index'])->name('catalog.index');
    Route::post('/get-oil', [HomeController::class, 'getOil'])->name('home.get');
    Route::post('/send-form', [HomeController::class, 'form'])->name('home.form');
    Route::get('/sale', [HomeController::class, 'page'])->name('sale.index');
    Route::get('/product/{slug}', [ControllersProductController::class, 'index'])->name('product.index');
    Route::get('/cart/check', [ControllersProductController::class, 'cart'])->name('cart.index');
    Route::post('/addtocart', [ControllersProductController::class, 'add'])->name('cart.add');
    Route::post('/updatecart', [ControllersProductController::class, 'update'])->name('cart.update');
    Route::post('/deletecart', [ControllersProductController::class, 'destroy'])->name('cart.destroy');
    Route::get('/cart/clear', [ControllersProductController::class, 'destroyAll'])->name('cart.clear');
});
