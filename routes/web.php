<?php

use App\Http\Controllers\vendor\ProductController;
use App\Http\Middleware\VendorMiddleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminBannerController;

use App\Http\Controllers\{
    HomeController,
    CategoryController,
    SubcategoryController,
    ProductdetailController,
    CartController,
    CheckoutController,
    UserController,
    VendorController,
    AdminController
};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::group(['prefix' => '/category'], function () {
    Route::get('/{slug}', [CategoryController::class, 'detail']);
    Route::get('/electronics/{slug}', [SubcategoryController::class, 'detail']);
    Route::get('/electronics/tv/{slug}', [ProductdetailController::class, 'productdetail']);
});

Route::get('/cart-list/{slug}', [CartController::class, 'list']);
Route::get('/checkout/{slug}', [CheckoutController::class, 'checkout']);
Route::get('register', [UserController::class, 'register']);
Route::get('register1', [UserController::class, 'register1']);
Route::get('login', [UserController::class, 'login']);
Route::get('login1', [UserController::class, 'login1']);

// User Dashboard Routes Starts Here:

Route::group(['prefix' => '/user'], function () {

    Route::get('/', [UserController::class, 'index']);
    Route::get('/order-history', [UserController::class, 'history']);
    Route::get('/settings', [UserController::class, 'settings']);
    Route::get('/detail', [UserController::class, 'detail']);
});

// Vendor Dashboard Route Starts Here:

Route::group(['prefix' => '/vendor'], function () {

    Route::get('/signup', [VendorController::class, 'signup']);
    Route::post('/signup', [VendorController::class, 'register']);
    Route::get('/login', [VendorController::class, 'login']);
    Route::post('/login', [VendorController::class, 'login_create']);
    Route::get('/logout', [VendorController::class, 'logout']);
    Route::get('/forget', [VendorController::class, 'forget']);
    Route::get('/', [VendorController::class, 'index'])->middleware(VendorMiddleware::class);
    Route::get('/add-product', [ProductController::class, 'addproduct']);
    Route::post('/add-product', [ProductController::class, 'createproduct']);
    Route::get('/view-product', [ProductController::class, 'viewproduct']);
    Route::get('/edit-product/{p_id}', [ProductController::class, 'editproduct']);
    Route::put('/edit-product/{p_id}', [ProductController::class, 'updateproduct']);
    Route::delete('/delete-product/{p_id}', [ProductController::class, 'deleteproduct']);
    Route::get('/orders', [VendorController::class, 'orders']);
    Route::get('/order-detail', [VendorController::class, 'orderdetail']);
    Route::get('/users', [VendorController::class, 'users']);
    Route::get('/profile', [VendorController::class, 'profile']);
    Route::put('/profile', [VendorController::class, 'updateprofile']);

});

// Admin Dashboard Route Starts Here:

Route::get('admin/login', [AdminController::class, 'login']);

Route::get('admin/', [AdminController::class, 'index']);

Route::get('admin/order-detail', [AdminController::class, 'orderdetail']);

Route::get('admin/add-category', [AdminCategoryController::class, 'addcategory']);

Route::post('admin/add-category', [AdminCategoryController::class, 'createcategory']);

Route::get('admin/view-category', [AdminCategoryController::class, 'viewcategory']);

Route::get('admin/edit-category/{c_id}', [AdminCategoryController::class, 'editcategory']);

Route::put('admin/edit-category/{c_id}', [AdminCategoryController::class, 'updatecategory']);

Route::delete('admin/delete-category/{c_id}', [AdminCategoryController::class, 'deletecategory']);

Route::get('admin/users', [AdminController::class, 'users']);

Route::get('admin/vendors', [AdminController::class, 'vendors']);

Route::get('admin/orders', [AdminController::class, 'orders']);

Route::get('admin/add-banner', [AdminBannerController::class, 'addbanner']);

Route::post('admin/add-banner', [AdminBannerController::class, 'createbanner']);

Route::get('admin/view-banner', [AdminBannerController::class, 'viewbanner']);

// Route::get('admin/products', [AdminController::class, 'products']);