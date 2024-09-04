<?php

use Illuminate\Support\Facades\Route;
// here we are  define controller path;
use App\Http\Controllers\testingcontroller;
use App\Http\Controllers\Curd;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/fruit', function () {
    return view('fruit');
});
// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/header', function () {
    return view('header');
});

// Route::get('/thankyou', function () {
//     return view('thankyou');
// });
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "All caches cleared!";
});

// Controller route declare |This is php file|, |this is function (method)|
Route::get('/test', [testingcontroller::class, 'Onlytest'])->name('test');

// Load html file through controller
Route::get('/', [testingcontroller::class, 'indexpage'])->name('welcome');
Route::get('/contact', [testingcontroller::class, 'contact'])->name('contact');
Route::get('/checkout', [testingcontroller::class, 'check'])->name('checkout');
Route::post('/checkout', [testingcontroller::class, 'checkoutinsert'])->name('checkoutinsert');
Route::get('/cart', [testingcontroller::class, 'cart'])->name('cart');

Route::get('cartinsert/{productid}', [testingcontroller::class, 'insertcart'])->name('cartinserted');

Route::get('/user', [testingcontroller::class, 'user'])->name('user_registration');
Route::get('/addproduct', [testingcontroller::class, 'addproduct'])->name('addproduct');
Route::get('/testimonial', [testingcontroller::class, 'test'])->name('testimonial');
Route::get('/404page', [testingcontroller::class, 'page'])->name('404');
Route::get('/seller', [testingcontroller::class, 'seller'])->name('seller');
Route::get('/admin', [testingcontroller::class, 'admin'])->name('admin');
Route::get('Products/Edit/{productid}', [testingcontroller::class, 'edit'])->name('edit');
// Update Product
Route::put('/Products/Update/{productid}', [testingcontroller::class, 'update']);
Route::get('/Products/Delete/{productid}', [testingcontroller::class, 'delete']);
// delete item from cart
Route::get('/Deletecart/{cartid}', [Curd::class, 'delete']);

Route::get('/seller_login', [testingcontroller::class, 'loginseller'])->name('loginseller');
Route::post('/seller_login', [testingcontroller::class, 'sellerloginmein'])->name('sellerloginmein');

Route::get('/user_login', [testingcontroller::class, 'loginuser'])->name('loginuser');
Route::post('/submit_user_login', [testingcontroller::class, 'userloginme'])->name('userloginme');

Route::get('/shop', [testingcontroller::class, 'shop'])->name('shop');
Route::get('/shop-detail', [testingcontroller::class, 'detailshop'])->name('detail');
Route::get('/thankyou',[testingcontroller::class,'thankyou'])->name('thankyou');




// Here forms route

Route::post('submitFormData', [testingcontroller::class, 'submitFormData']);
Route::post('userRegistartion', [testingcontroller::class, 'User_Registartion']);
Route::get('SellerRegistration', [testingcontroller::class, 'Seller_Registration']);
Route::post('/admin', [testingcontroller::class, 'Addproducts'])->name('Addproducts');
