<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

// // 1. Login Route
// Route::get('/login', function () {
//     return view('auth.login'); // You'll need to create this view, or just return 'Login Page'
// })->name('login');

// // 2. Register Route
// Route::get('/register', function () {
//     return view('auth.register'); // You'll need to create this view
// })->name('register');

// // 3. Logout Route (Needs to be POST usually, but for design preview GET is fine or just leave as is)
// Route::post('/logout', function () {
//     return redirect('/');
// })->name('logout');


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
