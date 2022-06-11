<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;


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

Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/admin',[AdminController::class, 'adminControls']);

// Admin Routes
Route::get('/admin/chart',[AdminController::class, 'charts']);

// For User Table

Route::get('/admin/delete-user/{id}',[AdminController::class, 'deleteUser']);
Route::get('/admin/edit-user/{id}', [AdminController::class, 'showEditFormUsers']);
Route::post('/admin/save-edit-users', [AdminController::class, 'saveUserChanges']);

// For Product Table

Route::get('/admin/edit-product/{id}', [AdminController::class, 'showEditFormProduct']);
Route::post('/admin/save-edit-product', [AdminController::class, 'saveProductChanges']);
Route::get('/admin/add-product-form', [AdminController::class, 'showNewFormProduct']);
Route::post('/admin/save-new-product', [AdminController::class, 'saveNewProduct']);
Route::get('/admin/delete-product/{id}',[AdminController::class, 'deleteProduct']);

// For Category Table

Route::get('/admin/edit-category/{id}', [AdminController::class, 'showEditFormCategory']);
Route::post('/admin/save-edit-category', [AdminController::class, 'saveCategoryChanges']);
Route::get('/admin/add-category-form', [AdminController::class, 'showNewFormCategory']);
Route::post('/admin/save-new-category', [AdminController::class, 'saveNewCategory']);
Route::get('/admin/delete-category/{id}',[AdminController::class, 'deleteCategory']);

// For Normal User Routes
Route::get('/check-out', [App\Http\Controllers\CheckoutController::class, 'getCheckout'])->name('checkout');
Route::post('/save-payment', [App\Http\Controllers\PaymentController::class, 'saveNewPayment']);
Route::get('/profile',[App\Http\Controllers\OrderController::class, 'getOrders']);
    
});

// User Routes

Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/stores', [App\Http\Controllers\StoresController::class, 'stores'])->name('stores');
Route::get('/categories',[App\Http\Controllers\CategoriesController::class, 'categories'])->name('categories'); 
Route::get('/products',[App\Http\Controllers\ProductController::class, 'products'])->name('products'); 
Route::get('/add-to-cart/{id}', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('addToCart');
Route::get('/cart', [App\Http\Controllers\ProductController::class, 'getCart'])->name('cart');
Route::get('/reduce/{id}', [App\Http\Controllers\ProductController::class, 'getReduceByOne'])->name('reduceByOne');
Route::get('/add-more/{id}', [App\Http\Controllers\ProductController::class, 'getAddOne'])->name('addOne');
Route::get('/products/{category}',[App\Http\Controllers\ProductController::class, 'categoryProducts']);


