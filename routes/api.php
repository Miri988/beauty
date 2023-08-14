<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/account', [AuthController::class, 'signUp']);

Route::post('/login', [AuthController::class, 'logIn']);

Route::middleware('auth:sanctum') -> group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logOut']);
    Route::post('/logout_all', [AuthController::class, 'logOutAll']);
});

//
Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']) -> where('id', '\d+');

Route::get('/products/new_arrival', [ProductController::class, 'newArrival']);

Route::get('/products/bestsellers', [ProductController::class, 'bestSellers']);

Route::get('/products/view_products', [ProductController::class, 'viewProducts']);

Route::get('/products/may_like_products', [ProductController::class, 'mayLikeProducts']);

Route::get('/products/search', [ProductController::class, 'search']);

//mail

Route::get('/mail', [MailController::class, 'sendMail']);