<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('user', 'User\UserController', ["except" => ["create", "edit"]]);

Route::resource('buyer', 'Buyer\BuyerController', ["only" => ["index", "show"]]);

Route::resource('seller', 'Seller\SellerController', ["only" => ["index", "show"]]);

Route::resource('product', 'Product\ProductController', ["only" => ["index", "show"]]);

Route::resource('category', 'Category\CategoryController', ["except" => ["create", "edit"]]);

Route::resource('transaction', 'Transaction\TransactionController', ["only" => ["index", "show"]]);