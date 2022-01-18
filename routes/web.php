<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;


Route::get('/sign_up', function () {
    return view('signUp');
});
Route::post('signUp', [userController::class, 'signUp']);
Route::get('/sign_in', function () {
    return view('signIn');
});
Route::post("/signIn", [UserController::class, 'signIn']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('sign_in');
});


Route::get('/', [productController::class, 'get_product']);
Route::get("/detail/{id}", [ProductController::class, 'detail']);
Route::post('/add_to_cart', [productController::class, 'add_to_cart']);
Route::get("/cartlist", [ProductController::class, 'cartList']);
Route::get("/removecart/{id}", [ProductController::class, 'removeCart']);
Route::get("/orderPage", [ProductController::class, 'orderPage']);
Route::post("/orderplace", [ProductController::class, 'orderPlace']);
Route::get("/orders", [ProductController::class, 'myOrders']);
Route::get("/search", [ProductController::class, 'search']);
Route::get("/about", [ProductController::class, 'about']);
