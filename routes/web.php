<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

 Route::get('/app', function () {
    return view('auth.app');
});  
Route::get('/test', function () {
    return view('auth.test');
}); 
Route::middleware('checklogout')->group(function () {
Route::post('loginuser', [UserController::class, 'userlogin'])->name('loginuser'); 
Route::get('/',[UserController::class,'loginindex'])->name('home');

});

Route::post('/register', [UserController::class, 'registeruser'])->name('registeruser'); 
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware('checklogin')->group(function () {
Route::get('/profile', [UserController::class, 'profilepage'])->name('profile');
Route::get('/registerpage', [UserController::class, 'registerpage'])->name('registerpage'); 

});


