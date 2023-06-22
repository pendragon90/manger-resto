<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProductsController;

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

// Auth
Route::get('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::post('login', [AuthController::class, 'auth']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);

// Account
Route::get('account', function() {
    return view('account.account', [
        'title' => 'account'
    ]);
});

// WEB
Route::get('/', function () {
    return view('web.index', [
        'title' => '/',
    ]);
});

Route::get('/daftar', function () {
    return view('web.daftar');
});

Route::get('/promo', function () {
    return view('web.promo', [
        'title' => 'promo',
    ]);
});

Route::get('menu/{id}',  [ProductsController::class, 'show']);
// TAMBAH
Route::get('menu',  [ProductsController::class, 'index']);
Route::post('menu',  [ProductsController::class, 'store']);
Route::get('tambah', [ProductsController::class, 'create'])->middleware('checkrole');

// ulasan
Route::get('ulasan', [CommentsController::class, 'index']);

Route::post('ulasan', [CommentsController::class, 'store']);
Route::patch('ulasan/{id}', [CommentsController::class, 'update'])->name('comments.update');
Route::delete('ulasan/{id}', [CommentsController::class, 'destroy'])->name('comments.destroy');

// shopping
Route::get('shopping', function() {
    return view('shopping.shopping',[
        'title' => 'shopping',
    ]);
});







