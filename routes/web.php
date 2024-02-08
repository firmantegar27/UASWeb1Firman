<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\GamePcController;
use App\Http\Controllers\GameAllController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GameMobileController;
use App\Http\Controllers\RegisterAdminController;

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

// Route::get('/', [HomeController::class, 'titles']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [GameAllController::class, 'search'])->name('search');
Route::post('/feedback', [FeedbackController::class, 'feedback']);
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');

// Route::get('/topup/{game}', [TopUpController::class, 'showForm']);
// Route::post('/topup', [TopUpController::class, 'topup']);

// Route::get('/topup/{game}', [HomeController::class, 'showForm']);
// Route::get('/topup', [HomeController::class, 'index', 'topup'])->name('home');
// Tambahkan route untuk menampilkan halaman form top up
// Route::get('/form', [TopUpController::class, 'showForm'])->name('topup.form');


// Route::get('/mobile', [GameMobileController::class, 'index'])->name('home');
// Route::get('/pc', [GamePcController::class, 'index'])->name('home');
// Route::get('/all', [GameAllController::class, 'index'])->name('home');

// Route::get('/games', 'GameAllController@index'); // Mengasumsikan Anda memiliki GameController untuk menampilkan game
// Route::get('/topup/{id}', [TopUpController::class, 'showForm']);
// Route::post('/topup/{id}', [TopUpController::class, 'processTopUp']);

// Route::get('/topup/formMobile/{id}', [GameMobileController::class, 'showForm']);
// Route::post('/topup/formMobile{/id}', [GameMobileController::class, 'processTopUp']);

// Route::get('/topup/formPC/{id}', [GamePcController::class, 'showForm']);
// Route::post('/topup/formPC/{id}', [GamePcController::class, 'processTopUp']);

// Route::get('topup/form/game-pc', [GamePcController::class, 'showGamePCForm']);

Route::get('/topup/{type}/{id}', [TopUpController::class, 'showTopUpForm']);

Route::post('/submit-form', [TopUpController::class, 'submitForm'])->name('submit-form');
Route::get('/result', [TopUpController::class, 'showResult'])->name('result');

// Route::get('/result', [TopUpController::class, 'showResult'])->name('result');

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
// Route::post('/login-proses', [AuthController::class, 'login_proses'])->name('login-proses');
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('formlogin');
// Route::post('/login', 'AuthController@login')->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/registerAdmin', [RegisterAdminController::class, 'index'])->name('registerAdmin');
Route::post('/registerAdmin', [RegisterAdminController::class, 'store']);

// route::post('/admin', [AdminController::class, 'login'])->name('loginAdmin');
Route::get('/adminIndex', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin/index', [AdminController::class, 'index'])->name('index');
Route::get('/admin', [AdminController::class, 'login'])->name('loginAdmin');
Route::post('/admin/authenticate', [AdminController::class, 'authenticate'])->name('auth');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('/admin/toggle-status/{user}', [AdminController::class, 'toggleStatus'])->name('admin.users.toggleStatus');
Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');